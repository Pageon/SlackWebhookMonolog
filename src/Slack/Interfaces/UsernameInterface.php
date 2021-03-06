<?php

namespace Pageon\SlackWebhookMonolog\Slack\Interfaces;

use JsonSerializable;

/**
 * @author Jelmer Prins <jelmer@pageon.be>
 *
 * @since 0.1.0
 */
interface UsernameInterface extends JsonSerializable
{
    /**
     * Returns the username.
     *
     * @return string
     */
    public function getUsername();

    /**
     * The string representation of the username class should match the username.
     *
     * @return string
     */
    public function __toString();
}
