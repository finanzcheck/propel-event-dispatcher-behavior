self::getEventDispatcher()->dispatch(new GenericEvent($this<?php if ($withConnection) : ?>, array('connection' => $con)<?php endif; ?>), '<?php echo $eventName ?>');
