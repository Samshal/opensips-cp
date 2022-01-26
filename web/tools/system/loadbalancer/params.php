<?php

$config->loadbalancer = array(
    "results_per_page" => array(
		"default" => 25,
		"name"    => "Results per page",
		"tip"    => "Number of results per page",
		"type"    => "number",
		"validation_regex" => "^[0-9]+$",
	),
	"results_page_range" => array(
		"default" => 10,
		"name"    => "Results page range",
		"tip"    => "Control over the pagination when displaying the Load Balancer destinationse",
		"type"    => "number",
		"validation_regex" => "^[0-9]+$",
    ),
    "table_lb" => array(
        "default" => "load_balancer",
        "name" => "Table load balancer",
        "type" => "text",
		"tip"  => "The database table name for storing the Load Balancer destinations"
    ),
	"talk_to_this_assoc_id" => array(
		"default" => 1,
		"name"    => "Talk to this assoc id",
		"options" => get_assoc_id(),
		"type"    => "dropdown",
		"tip" 	  => "As OCP can manage multiple OpenSIPS instances, this is the association ID 
		pointing to the group of servers (system) which needs to be provision with this Load Balancer information."
	)
);