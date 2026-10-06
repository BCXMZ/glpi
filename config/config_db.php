<?php
class DB extends DBmysql {
   public $dbhost = '127.0.0.1';
   public $dbuser = 'root';
   public $dbpassword = '12345';
   public $dbdefault = 'glpi';
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
