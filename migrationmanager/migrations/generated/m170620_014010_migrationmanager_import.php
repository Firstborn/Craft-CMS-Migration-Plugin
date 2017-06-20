<?php
namespace Craft;

/**
 * The class name is the UTC timestamp in the format of mYYMMDD_HHMMSS_pluginHandle_migrationName
 */
class m170620_014010_migrationmanager_import extends BaseMigration
{
	/**
	 * Any migration code in here is wrapped inside of a transaction.
	 *
	 * @return bool
	 */
	public function safeUp()
	{
	    $migrationJson = '{"fields":[{"group":"Default","name":"Tags","handle":"tags","instructions":"","translatable":"0","required":false,"type":"Tags","typesettings":{"source":"tags","selectionLabel":""}},{"group":"Default","name":"User","handle":"user","instructions":"","translatable":"0","required":false,"type":"Users","typesettings":{"sources":["admins","group:1"],"limit":"1","selectionLabel":""}}]}';
        $data = json_decode($migrationJson, true);
        return craft()->migrationManager_migrations->import($data);
    }

}
