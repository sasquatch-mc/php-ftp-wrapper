<?php

namespace Touki\FTP\Connection;

/**
 * Anonymous connection
 *
 * @author Touki <g.vincendon@vithemis.com>
 */
class AnonymousConnection extends Connection
{
    /**
     * Constructor
     *
     * @param string  $host    FTP Server adress
     * @param integer $port    Port to connect to
     * @param integer $timeout Default timeout
     */
    public function __construct($host, $port = 21, $timeout = 90)
    {
        parent::__construct($host, 'anonymous', 'guest', $port, $timeout);
    }
}
