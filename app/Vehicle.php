<?php

namespace Vehicles;
class Vehicle
{
    protected $make;
    protected $model;
    protected $price;
    protected $weight;
    protected $engine;
    protected $maxSpeed;
    protected $seats;
    protected $description;


    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function getVehicleData()
    {
        return $vehicleData = [
            $this->make,
            $this->model,
            $this->price,
            $this->weight,
            $this->engine,
            $this->maxSpeed,
            $this->seats,
            $this->description

        ];
    }

    public function addOtherVehicleData($price, $weight, $engine, $maxSpeed, $seats, $description)
    {
        $this->price = $price;
        $this->weight = $weight;
        $this->engine = $engine;
        $this->maxSpeed = $maxSpeed;
        $this->seats = $seats;
        $this->description = $description;

    }

}
/*1. Reikia	sukurti	bazinę	transporto	priemonės	klasę,	kuri	turėtų	bendras	savybes,	tinkamas	tiek
automobiliui,	tiek	motociklui,	tiek	dviračiui;
2. Sukurti	tos	klasės	metodus,	kurie	leistų	pakeisti	transporto	priemonės	modelį,	markę,	kainą,	svorį,
ar	yra	variklis,	jei	yra	kokio	jis	galingumo,	 pasiekiamą	maksimalų	greitį,	aprašymą,	kainą,	kiek	gali
važiuoti	žmonių;
3. Sukurti	konstruktorių,	kurio	pagalba	būtų	galima	iš	karto	nurodyti	modelį	ir	markę;
4. Inicijuoti	objektą;	Atspausdinti	automobilio	modelį	ir	markę;
5. Sukurti	Getters	ir	Setters	savybių	gavimui	ir	priskyrimui;
6. Panaudoti	pastaruosius	metodus	ir	priskirti	trūkstamą	informaciją;
7. Sukurti	automobilio,	motociklo	ir	dviračio	klases;
8. Kiekvienoje	klasėje	sukurti	tik	šio	tipo	transporto	priemonei	tinkamą	savybę,	jos	get	ir	set	metodus;
9. Sukurti	objektus	iš	automobilio,	motociklo	ir	dviračio	klasių;
10. Priskirti	tik	šioms	TP	tinkamas	savybes	naudojant	set	metodą;	Atspausdinti	naudojant	get	metodą;	*/