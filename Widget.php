<?php declare(strict_types = 1);

/*
 * Obsernia FortiGate Overview
 * Copyright (C) 2026 Pablo Lisaso — Obsernia
 * https://obsernia.com/
 */

namespace Modules\ObserniaFortiGateOverview;

use Zabbix\Core\CWidget;

class Widget extends CWidget {

	public function getTranslationStrings(): array {
		return [
			'class.widget.js' => [
				'No data' => _('No data')
			]
		];
	}
}
