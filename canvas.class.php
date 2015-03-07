<?php
class canvas
{
	private $name;
	private  $KeyPartners;
	private $KeyActivities;
	private $KeyResources;
	private $ValueProposition;
	private $CustomerRelationships;
	private $Channels;
	private $CustomerSegments;
	private $CostStructure;
	private $RevenueStreams;
	private $user_id;
	public function __set($property, $value){
		if(property_exists($this, $property))
			{
				$this->$property = $value;
			}
	}
	public function __get($property){
		if(property_exists($this, $property))
			{
				return $this->$property;
			}
	}
}
//?>