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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAgeRange(): ?string
    {
        return $this->ageRange;
    }

    public function setAgeRange(?string $ageRange): self
    {
        $this->ageRange = $ageRange;

        return $this;
    }

    public function getAgeRangeMax(): ?string
    {
        return $this->ageRangeMax;
    }

    public function setAgeRangeMax(?string $ageRangeMax): self
    {
        $this->ageRangeMax = $ageRangeMax;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(?string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddressId(): ?int
    {
        return $this->addressId;
    }

    public function setAddressId(?int $addressId): self
    {
        $this->addressId = $addressId;

        return $this;
    }

    public function getIsBeta(): ?bool
    {
        return $this->isBeta;
    }

    public function setIsBeta(bool $isBeta): self
    {
        $this->isBeta = $isBeta;

        return $this;
    }

    public function getTutorial(): ?bool
    {
        return $this->tutorial;
    }

    public function setTutorial(bool $tutorial): self
    {
        $this->tutorial = $tutorial;

        return $this;
    }

    public function getTutorialMobile(): ?bool
    {
        return $this->tutorialMobile;
    }

    public function setTutorialMobile(bool $tutorialMobile): self
    {
        $this->tutorialMobile = $tutorialMobile;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getHasCustomAvatar(): ?bool
    {
        return $this->hasCustomAvatar;
    }

    public function setHasCustomAvatar(?bool $hasCustomAvatar): self
    {
        $this->hasCustomAvatar = $hasCustomAvatar;

        return $this;
    }

    public function getEmailNewFollower(): ?bool
    {
        return $this->emailNewFollower;
    }

    public function setEmailNewFollower(bool $emailNewFollower): self
    {
        $this->emailNewFollower = $emailNewFollower;

        return $this;
    }

    public function getEmailNewRecommendation(): ?bool
    {
        return $this->emailNewRecommendation;
    }

    public function setEmailNewRecommendation(bool $emailNewRecommendation): self
    {
        $this->emailNewRecommendation = $emailNewRecommendation;

        return $this;
    }

    public function getNotificationsAll(): ?bool
    {
        return $this->notificationsAll;
    }

    public function setNotificationsAll(bool $notificationsAll): self
    {
        $this->notificationsAll = $notificationsAll;

        return $this;
    }

    public function getNotificationsWisdoc(): ?bool
    {
        return $this->notificationsWisdoc;
    }

    public function setNotificationsWisdoc(bool $notificationsWisdoc): self
    {
        $this->notificationsWisdoc = $notificationsWisdoc;

        return $this;
    }

    public function getNotificationsRequests(): ?bool
    {
        return $this->notificationsRequests;
    }

    public function setNotificationsRequests(bool $notificationsRequests): self
    {
        $this->notificationsRequests = $notificationsRequests;

        return $this;
    }

    public function getNotificationsInvitations(): ?bool
    {
        return $this->notificationsInvitations;
    }

    public function setNotificationsInvitations(bool $notificationsInvitations): self
    {
        $this->notificationsInvitations = $notificationsInvitations;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFacebookUserId(): ?string
    {
        return $this->facebookUserId;
    }

    public function setFacebookUserId(string $facebookUserId): self
    {
        $this->facebookUserId = $facebookUserId;

        return $this;
    }

    public function getGoogleId(): ?string
    {
        return $this->googleId;
    }

    public function setGoogleId(?string $googleId): self
    {
        $this->googleId = $googleId;

        return $this;
    }

    public function getRememberToken(): ?string
    {
        return $this->rememberToken;
    }

    public function setRememberToken(?string $rememberToken): self
    {
        $this->rememberToken = $rememberToken;

        return $this;
    }

    public function getValidationToken(): ?string
    {
        return $this->validationToken;
    }

    public function setValidationToken(?string $validationToken): self
    {
        $this->validationToken = $validationToken;

        return $this;
    }

    public function getValidated(): ?bool
    {
        return $this->validated;
    }

    public function setValidated(bool $validated): self
    {
        $this->validated = $validated;

        return $this;
    }

    public function getLastDefaultLanguage(): ?string
    {
        return $this->lastDefaultLanguage;
    }

    public function setLastDefaultLanguage(string $lastDefaultLanguage): self
    {
        $this->lastDefaultLanguage = $lastDefaultLanguage;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


}
