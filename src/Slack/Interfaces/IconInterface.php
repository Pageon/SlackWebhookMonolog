<?php

namespace Pageon\SlackWebhookMonolog\Slack\Interfaces;

use JsonSerializable;

/**
 * @author Jelmer Prins <jelmer@pageon.be>
 *
 * @since 0.1.0
 */
interface IconInterface extends JsonSerializable
{
    /**
     * Returns the icon.
     *
     * @return string
     */
    public function getIcon();

    /**
     * Returns the name of the type i.e. "emoji".
     *
     * @return string
     */
    public function getType();

    /**
     * When the class is cast to a string it should return the name of the icon.
     *
     * @return string
     */
    public function __toString();
}
