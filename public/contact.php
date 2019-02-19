<?php
require '../core/functions.php';
require '../config/keys.php';
require '../core/db_connect.php';
require '../core/processContactForm.php';

$meta=[];
$meta['title']='Contact Chris';
$meta['description']='Contact Chris';

$content = <<<EOT

    {$message}
      <form action="contact.php" method="POST" novalidate>
      <h1>Contact Form</h1>

      <div class="form-group">
        <label for="name">First Name</label>
        <input class="form-control" id="first_name" type="text" name="first_name" value="{$valid->userInput('name')}">
        <div class="text-danger">{$valid->error('name')}</div>
      </div>
      <div class="form-group">
      <label for="name">Last Name</label>
      <input class="form-control" id="last_name" type="text" name="last_name" value="{$valid->userInput('name')}">
      <div class="text-danger">{$valid->error('name')}</div>
    </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input required class="form-control" id="email" type="email" name="email" value="{$valid->userInput('email')}">
        <div class="text-danger">{$valid->error('email')}</div>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message">{$valid->userInput('message')}</textarea>
        <div class="text-danger">{$valid->error('message')}</div>
      </div>

      <div>
        <input type="hidden" name="subject" value="New submission!">
      </div>

      <div>
        <input type="submit" value="Send" class="btn btn-primary">
      </div>

    </form>
EOT;

require '../core/layout.php';
