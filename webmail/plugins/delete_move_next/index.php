<?php

/**
 * index.php
 *
 * This file simply takes any attempt to view source files and sends those
 * people to the login screen. At this point no attempt is made to see if the
 * person is logged in or not.
 *
 * @copyright &copy; 1999-2009 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: index.php 13549 2009-04-15 22:00:49Z jervfors $
 * @package plugins
 * @subpackage delete_move_next
 */

header('Location: ../index.php');

?>