<?php

use App\Models\Coupon;
use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PackageCouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating Packages and Coupons tables');
        $this->truncatePackageCouponTables();

        // ===================
        // CREATING PACKAGES
        // ===================
        $package = new Package();
        $package->name = "Free";
        $package->slug = "free";
        $package->discount_percent = 0;
        $package->save();

        $package = new Package();
        $package->name = "Silver";
        $package->slug = "silver";
        $package->discount_percent = 20;
        $package->save();

        $package = new Package();
        $package->name = "Gold";
        $package->slug = "gold";
        $package->discount_percent = 40;
        $package->save();

        $package = new Package();
        $package->name = "Platinum";
        $package->slug = "platinum";
        $package->discount_percent = 55;
        $package->save();

        $package = new Package();
        $package->name = "Diamond";
        $package->slug = "diamond";
        $package->discount_percent = 75;
        $package->save();


        // ===================
        // CREATING COUPONS
        // ===================

        $coupon = new Coupon();
        $r = Str::random(2);
        $coupon->code = "TAILORS_".$r.date('y');
        $coupon->discount_percent = 0;
        $coupon->save();
    }

    /**
     * Truncates all the package and coupon tables.
     *
     * @return void
     */
    public function truncatePackageCouponTables()
    {
        Schema::disableForeignKeyConstraints();
        Package::truncate();
        Coupon::truncate();
        Schema::enableForeignKeyConstraints();
    }
}
