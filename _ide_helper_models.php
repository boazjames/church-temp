<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Sermon[] $sermon
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Sermon
 *
 * @property-read \App\User $user
 */
	class Sermon extends \Eloquent {}
}

namespace App{
/**
 * App\Time
 *
 */
	class Time extends \Eloquent {}
}

namespace App{
/**
 * App\Video
 *
 */
	class Video extends \Eloquent {}
}

