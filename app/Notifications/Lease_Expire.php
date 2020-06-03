<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Lease_Expire extends Notification 
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
       // return (new MailMessage)->view('notification_view');
        
        return (new MailMessage)
                     ->line('Dear Sir/ Madam,')
                    ->line('Subject: Alerts For Invoice with attachment:')
                    
                    ->line('Greetings from Safexpress!')
                    //->line(' Please find attached herewith Summary of Invoices With Attachment')
                   ->line(' Please click on below button for Summary of Invoices')
                    ->action('Lease Expire', url('/sendmail'))
                    ->view('email');
                    //->view('email1');
                     //->line(' Warm Regards,')
                    
                  
                   // ->line('Thank you for using our application!');
                    
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
