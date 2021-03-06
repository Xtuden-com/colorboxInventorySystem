<?php

use yii\db\Migration;

class m180710_085244_create_table_inventory_out extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%inventory_out}}', [
            'inventory_out_id' => $this->primaryKey(),
            'shade_id' => $this->integer(),
            'quantity' => $this->integer(),
            'salesman_id' => $this->integer(),
            'customer_id' => $this->integer(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);

        $this->execute($this->getInventoryOutSql());
    }

    public function down()
    {
        $this->dropTable('{{%inventory_out}}');
    }

    public function getInventoryOutSql()
    {
        return "INSERT INTO `inventory_out` VALUES (1, 1, 1, 1, 1, '2017-08-09 02:41:57'),
             (2, 2, 1, 1, 1, '2017-08-09 02:48:14'),
             (3, 9, 1, 1, 1, '2017-08-09 02:51:58'),
             (4, 11, 2, 1, 1, '2017-08-13 19:36:25'),
             (5, 12, 1, 1, 1, '2017-08-13 19:36:26'),
             (6, 13, 1, 1, 1, '2017-08-13 19:36:26'),
             (7, 14, 2, 1, 1, '2017-08-13 19:36:26'),
             (8, 1, 2, 1, 3, '2017-09-15 02:49:20'),
             (9, 3, 1, 1, 3, '2017-09-15 02:49:20'),
             (10, 801, 1, 1, 3, '2017-09-15 02:49:20'),
             (11, 802, 2, 1, 3, '2017-09-15 02:49:20'),
             (12, 803, 2, 1, 3, '2017-09-15 02:49:20'),
             (13, 3, 2, 1, 3, '2017-09-15 03:31:37'),
             (14, 702, 1, 1, 3, '2017-09-15 03:31:37'),
             (15, 801, 1, 1, 3, '2017-09-15 03:31:37'),
             (16, 802, 2, 1, 3, '2017-09-15 03:31:37'),
             (17, 1, 2, 1, 3, '2017-10-31 01:00:01'),
             (18, 3, 1, 1, 3, '2017-10-31 01:00:01'),
             (19, 801, 1, 1, 3, '2017-10-31 01:00:01'),
             (20, 802, 1, 1, 3, '2017-10-31 01:00:01'),
             (21, 803, 1, 1, 3, '2017-10-31 01:00:01'),
             (22, 785, 1, 1, 3, '2017-10-31 01:40:25'),
             (23, 786, 1, 1, 3, '2017-10-31 01:40:25'),
             (24, 786, 1, 1, 3, '2017-10-31 01:42:56'),
             (25, 787, 2, 1, 3, '2017-10-31 01:42:56'),
             (26, 788, 1, 1, 3, '2017-10-31 01:42:56'),
             (27, 1, 2, 1, 2, '2017-10-31 02:09:51'),
             (28, 2, 2, 1, 2, '2017-10-31 02:09:51'),
             (29, 3, 2, 1, 2, '2017-10-31 02:09:51'),
             (30, 801, 1, 1, 2, '2017-10-31 02:09:51'),
             (31, 1, 2, 1, 2, '2017-10-31 02:33:39'),
             (32, 2, 1, 1, 2, '2017-10-31 02:33:40'),
             (33, 801, 2, 1, 2, '2017-10-31 02:33:40'),
             (34, 819, 1, 1, 3, '2018-01-08 01:48:24'),
             (35, 801, 1, 1, 3, '2018-01-16 01:29:11'),
             (36, 802, 1, 1, 3, '2018-01-16 01:29:11'),
             (37, 803, 1, 1, 3, '2018-01-16 01:29:11'),
             (38, 805, 1, 1, 3, '2018-01-16 01:29:11'),
             (39, 123, 2, 1, 2, '2018-01-20 00:36:54'),
             (40, 801, 1, 1, 2, '2018-01-20 00:36:55'),
             (41, 806, 2, 1, 2, '2018-01-20 00:36:55'),
             (42, 807, 2, 1, 2, '2018-01-20 00:36:55'),
             (43, 123, 3, 1, 3, '2018-01-20 00:47:00'),
             (44, 801, 3, 1, 3, '2018-01-20 00:47:01'),
             (45, 802, 3, 1, 3, '2018-01-20 00:47:01'),
             (46, 1, 1, 1, 3, '2018-01-20 00:49:55'),
             (47, 2, 1, 1, 3, '2018-01-20 00:49:56'),
             (48, 3, 1, 1, 3, '2018-01-20 00:49:56'),
             (49, 800, 1, 1, 3, '2018-01-20 00:49:56'),
             (50, 801, 1, 1, 3, '2018-01-20 00:49:56'),
             (51, 802, 1, 1, 3, '2018-01-20 00:51:40'),
             (52, 802, 120, 1, 3, '2018-01-20 00:57:22');
            ";
    }
}
