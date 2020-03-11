<?php
// --- PROBLEMATIQUE
class Utilisateur {
	public function create(SqliteDatabase $db) {
		$db->query("INSERT INTO utilsiateurs VALUES ('".$identifiant."')");
		$db->close();
	}
}

class SqliteDatabase {
	// ....
	public function query($query) {
		// ...
	}
}

class MysqlDatabase {
	// ....
	public function execute($query) {
		// ...
	}
}
