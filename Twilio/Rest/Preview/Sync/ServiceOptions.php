<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Sync;

use Twilio\Options;
use Twilio\Values;

abstract class ServiceOptions {
    /**
     * @param string $friendlyName The friendly_name
     * @param string $webhookUrl The webhook_url
     * @param string $reachabilityWebhooksEnabled The reachability_webhooks_enabled
     * @return CreateServiceOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $webhookUrl = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE) {
        return new CreateServiceOptions($friendlyName, $webhookUrl, $reachabilityWebhooksEnabled);
    }

    /**
     * @param string $webhookUrl The webhook_url
     * @param string $friendlyName The friendly_name
     * @param string $reachabilityWebhooksEnabled The reachability_webhooks_enabled
     * @return UpdateServiceOptions Options builder
     */
    public static function update($webhookUrl = Values::NONE, $friendlyName = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE) {
        return new UpdateServiceOptions($webhookUrl, $friendlyName, $reachabilityWebhooksEnabled);
    }
}

class CreateServiceOptions extends Options {
    /**
     * @param string $friendlyName The friendly_name
     * @param string $webhookUrl The webhook_url
     * @param string $reachabilityWebhooksEnabled The reachability_webhooks_enabled
     */
    public function __construct($friendlyName = Values::NONE, $webhookUrl = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
    }

    /**
     * The friendly_name
     * 
     * @param string $friendlyName The friendly_name
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The webhook_url
     * 
     * @param string $webhookUrl The webhook_url
     * @return $this Fluent Builder
     */
    public function setWebhookUrl($webhookUrl) {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * The reachability_webhooks_enabled
     * 
     * @param string $reachabilityWebhooksEnabled The reachability_webhooks_enabled
     * @return $this Fluent Builder
     */
    public function setReachabilityWebhooksEnabled($reachabilityWebhooksEnabled) {
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.Sync.CreateServiceOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateServiceOptions extends Options {
    /**
     * @param string $webhookUrl The webhook_url
     * @param string $friendlyName The friendly_name
     * @param string $reachabilityWebhooksEnabled The reachability_webhooks_enabled
     */
    public function __construct($webhookUrl = Values::NONE, $friendlyName = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE) {
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
    }

    /**
     * The webhook_url
     * 
     * @param string $webhookUrl The webhook_url
     * @return $this Fluent Builder
     */
    public function setWebhookUrl($webhookUrl) {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * The friendly_name
     * 
     * @param string $friendlyName The friendly_name
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The reachability_webhooks_enabled
     * 
     * @param string $reachabilityWebhooksEnabled The reachability_webhooks_enabled
     * @return $this Fluent Builder
     */
    public function setReachabilityWebhooksEnabled($reachabilityWebhooksEnabled) {
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.Sync.UpdateServiceOptions ' . implode(' ', $options) . ']';
    }
}