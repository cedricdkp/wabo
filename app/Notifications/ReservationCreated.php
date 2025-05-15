<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ReservationConfirmed extends Notification
{
    use Queueable;

    protected $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $item = $this->reservation->type === 'site' 
            ? \App\Models\Site::find($this->reservation->item_id)
            : \App\Models\Event::find($this->reservation->item_id);

        return (new MailMessage)
                    ->subject('Confirmation de votre réservation')
                    ->greeting('Bonjour ' . $notifiable->name . ',')
                    ->line('Votre réservation a été confirmée avec succès ! Voici les détails :')
                    ->line('**Type** : ' . ($this->reservation->type == 'site' ? 'Site touristique' : 'Événement culturel'))
                    ->line('**Sélection** : ' . $item->name)
                    ->line('**Proposé par** : ' . $item->provider->name)
                    ->line('**Date** : ' . $this->reservation->start_date . ($this->reservation->end_date ? ' - ' . $this->reservation->end_date : ''))
                    ->line('**Type de ' . ($this->reservation->type == 'site' ? 'visite' : 'billet') . '** : ' . ucfirst($this->reservation->visit_type ?? $this->reservation->ticket_type))
                    ->line('**Participants** : ' . $this->reservation->participants)
                    ->line('**Montant** : ' . number_format($this->reservation->amount, 0, ',', ' ') . ' FCFA')
                    ->line('**Statut** : ' . ucfirst($this->reservation->status))
                    ->action('Voir vos réservations', url('/reservations'))
                    ->line('Merci de votre confiance !');
    }
}