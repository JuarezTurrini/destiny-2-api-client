<?php

namespace AdamDBurton\Destiny2ApiClient\Enum;

class StatsGroup extends Enum
{
	const None = 0;
	const General = 1;
	const Weapons = 2;
	const Medals = 3;
	const ReservedGroups = 100;
	const Leaderboard = 101;
	const Activity = 102;
	const UniqueWeapon = 103;
	const Internal = 104;
}