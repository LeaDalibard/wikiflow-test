<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="users_email_unique", columns={"email"})}, indexes={@ORM\Index(name="name", columns={"name", "email"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=120, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=120, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=50, nullable=true)
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="age_range", type="string", length=30, nullable=true)
     */
    private $ageRange;

    /**
     * @var string|null
     *
     * @ORM\Column(name="age_range_max", type="string", length=30, nullable=true)
     */
    private $ageRangeMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locale", type="string", length=30, nullable=true)
     */
    private $locale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="birthday", type="string", length=60, nullable=true)
     */
    private $birthday;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=false, options={"default"="user"})
     */
    private $role = 'user';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="address_id", type="integer", nullable=true)
     */
    private $addressId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_beta", type="boolean", nullable=false)
     */
    private $isBeta = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tutorial", type="boolean", nullable=false)
     */
    private $tutorial = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tutorial_mobile", type="boolean", nullable=false)
     */
    private $tutorialMobile = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=false)
     */
    private $avatar;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_custom_avatar", type="boolean", nullable=true)
     */
    private $hasCustomAvatar;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_new_follower", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emailNewFollower = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_new_recommendation", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emailNewRecommendation = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifications_all", type="boolean", nullable=false, options={"default"="1"})
     */
    private $notificationsAll = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifications_wisdoc", type="boolean", nullable=false, options={"default"="1"})
     */
    private $notificationsWisdoc = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifications_requests", type="boolean", nullable=false, options={"default"="1"})
     */
    private $notificationsRequests = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="notifications_invitations", type="boolean", nullable=false, options={"default"="1"})
     */
    private $notificationsInvitations = true;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=60, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_user_id", type="string", length=255, nullable=false)
     */
    private $facebookUserId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_id", type="string", length=150, nullable=true)
     */
    private $googleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remember_token", type="string", length=100, nullable=true)
     */
    private $rememberToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="validation_token", type="string", length=50, nullable=true)
     */
    private $validationToken;

    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean", nullable=false)
     */
    private $validated = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_default_language", type="string", length=5, nullable=false, options={"default"="en","fixed"=true})
     */
    private $lastDefaultLanguage = 'en';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $createdAt = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $updatedAt = '0000-00-00 00:00:00';


}
