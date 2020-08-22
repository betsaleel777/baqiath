<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Contact
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $nomination
 * @property string $phone
 * @property string $email
 * @property string $message
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereNomination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App{
/**
 * App\Maisons
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $intitule
 * @property string|null $statut
 * @property string $lieu
 * @property int|null $chambre
 * @property int|null $salon
 * @property int|null $superficie
 * @property string $image_presentation
 * @property string|null $shodai
 * @property string|null $nidaime
 * @property string|null $sandaime
 * @property string|null $yondaime
 * @property string|null $gondaime
 * @property string|null $rokudaime
 * @property int|null $rang
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons query()
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereChambre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereGondaime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereImagePresentation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereIntitule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereLieu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereNidaime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereRang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereRokudaime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereSalon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereSandaime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereShodai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereStatut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereSuperficie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maisons whereYondaime($value)
 */
	class Maisons extends \Eloquent {}
}

namespace App{
/**
 * App\Terrains
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $intitule
 * @property string $statut
 * @property string $lieu
 * @property int $superficie
 * @property string $image_presentation
 * @property string $shodai
 * @property string $nidaime
 * @property string $sandaime
 * @property string $yondaime
 * @property string $gondaime
 * @property string $rokudaime
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains query()
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereGondaime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereImagePresentation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereIntitule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereLieu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereNidaime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereRokudaime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereSandaime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereShodai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereStatut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereSuperficie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Terrains whereYondaime($value)
 */
	class Terrains extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

