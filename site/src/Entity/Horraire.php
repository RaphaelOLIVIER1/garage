<?php

namespace App\Entity;

use App\Repository\HorraireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HorraireRepository::class)]
class Horraire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $lundi_m = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $lundi_s = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $mardi_m = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $mardi_s = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi_m = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $mercredi_s = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi_m = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $jeudi_s = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi_m = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $vendredi_s = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $samedi_m = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $samedi_s = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLundiM(): ?\DateTimeInterface
    {
        return $this->lundi_m;
    }

    public function setLundiM(\DateTimeInterface $lundi_m): static
    {
        $this->lundi_m = $lundi_m;

        return $this;
    }

    public function getLundiS(): ?\DateTimeInterface
    {
        return $this->lundi_s;
    }

    public function setLundiS(\DateTimeInterface $lundi_s): static
    {
        $this->lundi_s = $lundi_s;

        return $this;
    }

    public function getMardiM(): ?\DateTimeInterface
    {
        return $this->mardi_m;
    }

    public function setMardiM(\DateTimeInterface $mardi_m): static
    {
        $this->mardi_m = $mardi_m;

        return $this;
    }

    public function getMardiS(): ?\DateTimeInterface
    {
        return $this->mardi_s;
    }

    public function setMardiS(\DateTimeInterface $mardi_s): static
    {
        $this->mardi_s = $mardi_s;

        return $this;
    }

    public function getMercrediM(): ?\DateTimeInterface
    {
        return $this->mercredi_m;
    }

    public function setMercrediM(\DateTimeInterface $mercredi_m): static
    {
        $this->mercredi_m = $mercredi_m;

        return $this;
    }

    public function getMercrediS(): ?\DateTimeInterface
    {
        return $this->mercredi_s;
    }

    public function setMercrediS(\DateTimeInterface $mercredi_s): static
    {
        $this->mercredi_s = $mercredi_s;

        return $this;
    }

    public function getJeudiM(): ?\DateTimeInterface
    {
        return $this->jeudi_m;
    }

    public function setJeudiM(\DateTimeInterface $jeudi_m): static
    {
        $this->jeudi_m = $jeudi_m;

        return $this;
    }

    public function getJeudiS(): ?\DateTimeInterface
    {
        return $this->jeudi_s;
    }

    public function setJeudiS(\DateTimeInterface $jeudi_s): static
    {
        $this->jeudi_s = $jeudi_s;

        return $this;
    }

    public function getVendrediM(): ?\DateTimeInterface
    {
        return $this->vendredi_m;
    }

    public function setVendrediM(\DateTimeInterface $vendredi_m): static
    {
        $this->vendredi_m = $vendredi_m;

        return $this;
    }

    public function getVendrediS(): ?\DateTimeInterface
    {
        return $this->vendredi_s;
    }

    public function setVendrediS(\DateTimeInterface $vendredi_s): static
    {
        $this->vendredi_s = $vendredi_s;

        return $this;
    }

    public function getSamediM(): ?\DateTimeInterface
    {
        return $this->samedi_m;
    }

    public function setSamediM(\DateTimeInterface $samedi_m): static
    {
        $this->samedi_m = $samedi_m;

        return $this;
    }

    public function getSamediS(): ?\DateTimeInterface
    {
        return $this->samedi_s;
    }

    public function setSamediS(\DateTimeInterface $samedi_s): static
    {
        $this->samedi_s = $samedi_s;

        return $this;
    }
}
