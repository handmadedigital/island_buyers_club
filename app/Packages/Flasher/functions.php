<?php
if ( ! function_exists('flash')) {
    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @return mixed
     */
    function flash($message = null)
    {
        $notifier = app('flasher');
        if ( ! is_null($message)) {
            return $notifier->info($message);
        }
        return $notifier;
    }
}