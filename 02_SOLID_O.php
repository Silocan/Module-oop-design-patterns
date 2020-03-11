<?php
// --- PROBLEMATIQUE
class Utilisateur {
	public function create($identifiant) {
		$db = new SQLite3('users.db');
		$db->query("INSERT INTO utilsiateurs VALUES ('".$identifiant."')");
		$db->close();
	}
}
