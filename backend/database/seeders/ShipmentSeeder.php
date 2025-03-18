<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipments = config('ecommerce_db_faker.shipments');
        foreach ($shipments as $shipment){
            $newShipment = new Shipment();
            $newShipment->order_id = $shipment['order_id'];
            $newShipment->tracking_number = $shipment['tracking_number'];
            $newShipment->status = $shipment['status'];
            $newShipment->carrier = $shipment['carrier'];
            $newShipment->save();
        }
    }
}
