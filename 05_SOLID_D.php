<?php
// --- PROBLEMATIQUE
class Utilsiateur {
	public function create() {
		$db = new MysqlDatabase();
		$db->query("INSERT INTO utilsiateurs VALUES ('".$identifiant."')");
		$db->close();
	}
}

