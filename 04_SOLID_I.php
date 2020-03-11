<?php
// --- PROBLEMATIQUE
interface UserInterface
{
  public function login($user, $password);

  public function logout();

  public function isConnected();

  public function isAdmin();

  public function getRights();
}

class User implements UserInterface
{

}
