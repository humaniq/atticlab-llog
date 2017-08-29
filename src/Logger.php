<?php

namespace attics\Lib\Llog;

Trait Logger
{
    /**
     * Psr3 Logger
     *
     * @uses Psr\Log\LoggerInterface
     */
    private $_logger = null;

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }

    public function ldebug($message, $context = [])
    {
        if (empty($this->_logger)) {
            return null;
        }

        return $this->_logger->debug($message, $context);
    }

    public function linfo($message, $context = [])
    {
        if (empty($this->_logger)) {
            return null;
        }
        return $this->_logger->info($message, $context);
    }

    public function lnotice($message, $context = [])
    {
        if (empty($this->_logger)) {
            return null;
        }
        return $this->_logger->notice($message, $context);
    }

    public function lwarning($message, $context = [])
    {
        if (empty($this->_logger)) {
            return null;
        }
        return $this->_logger->warning($message, $context);
    }

    public function lerror($message, $context = [])
    {
        if (empty($this->_logger)) {
            return null;
        }
        return $this->_logger->error($message, $context);
    }

    public function lalert($message, $context = [])
    {
        if (empty($this->_logger)) {
            return null;
        }
        return $this->_logger->alert($message, $context);
    }

    public function lemergency($message, $context = [])
    {
        if (empty($this->_logger)) {
            return null;
        }
        return $this->_logger->emergency($message, $context);
    }
}


