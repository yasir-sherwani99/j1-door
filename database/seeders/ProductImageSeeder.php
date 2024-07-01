<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = array(
            array(
                'product_id' => 1,
                'name' => 'infinity-2000.jpg',
                'src' => 'images/upload/products/infinity-2000.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 2,
                'name' => 'destiny-1200.jpg',
                'src' => 'images/upload/products/destiny-1200.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 3,
                'name' => 'destiny-1500.jpg',
                'src' => 'images/upload/products/destiny-1500.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 4,
                'name' => 'legacy-650.jpg',
                'src' => 'images/upload/products/legacy-650.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 5,
                'name' => 'legacy-850.jpg',
                'src' => 'images/upload/products/legacy-850.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 6,
                'name' => 'legacy-920.jpg',
                'src' => 'images/upload/products/legacy-920.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 7,
                'name' => 'odyssey-1000.jpg',
                'src' => 'images/upload/products/odyssey-1000.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 8,
                'name' => '3-button-remote.png',
                'src' => 'images/upload/products/3-button-remote.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 9,
                'name' => 'master-remote.png',
                'src' => 'images/upload/products/master-remote.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 10,
                'name' => '4-button-universal-remote-new.jpg',
                'src' => 'images/upload/products/4-button-universal-remote-new.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 10,
                'name' => 'universal-remote.png',
                'src' => 'images/upload/products/universal-remote.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 10,
                'name' => 'universal-4-button-remote.png',
                'src' => 'images/upload/products/universal-4-button-remote.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 11,
                'name' => 'ohd-anywhere-mobile-app.png',
                'src' => 'images/upload/products/ohd-anywhere-mobile-app.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 11,
                'name' => 'garage-retro-fit-kit.png',
                'src' => 'images/upload/products/garage-retro-fit-kit.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 11,
                'name' => 'ohdanywhere-smart-home.png',
                'src' => 'images/upload/products/ohdanywhere-smart-home.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 11,
                'name' => 'retrofit-kit.jpg',
                'src' => 'images/upload/products/retrofit-kit.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 12,
                'name' => 'universal-wireless-console.png',
                'src' => 'images/upload/products/universal-wireless-console.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 13,
                'name' => 'wirelss-wall-console.png',
                'src' => 'images/upload/products/wirelss-wall-console.png',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/png'
            ),
            array(
                'product_id' => 14,
                'name' => '1-button-remote-o1t.jpg',
                'src' => 'images/upload/products/1-button-remote-o1t.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 15,
                'name' => 'thermacore-dark-bronze-flush-panel-5740-195.jpg',
                'src' => 'images/upload/products/thermacore-dark-bronze-flush-panel-5740-195.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 15,
                'name' => 'thermacore-custom-long-panel-5740-198.jpg',
                'src' => 'images/upload/products/thermacore-custom-long-panel-5740-198.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 15,
                'name' => 'thermacore-standard-panel-5740-194-walnut.jpg',
                'src' => 'images/upload/products/thermacore-standard-panel-5740-194-walnut.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 15,
                'name' => 'thermacore-black-5760-fairbanks.jpg',
                'src' => 'images/upload/products/thermacore-black-5760-fairbanks.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 15,
                'name' => 'thermacore-gray-flush-panel-5740-195.jpg',
                'src' => 'images/upload/products/thermacore-gray-flush-panel-5740-195.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 16,
                'name' => 'courtyard-desert-tan-7560-161a.jpg',
                'src' => 'images/upload/products/courtyard-desert-tan-7560-161a.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 16,
                'name' => 'courtyard-white-7560-161b.jpg',
                'src' => 'images/upload/products/courtyard-white-7560-161b.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 16,
                'name' => 'courtyard-white-7560-166b.jpg',
                'src' => 'images/upload/products/courtyard-white-7560-166b.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 16,
                'name' => 'courtyard-terra-bronze-sandstone-7560-162e.jpg',
                'src' => 'images/upload/products/courtyard-terra-bronze-sandstone-7560-162e.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 16,
                'name' => 'courtyard-white-7560-161a.jpg',
                'src' => 'images/upload/products/courtyard-white-7560-161a.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 17,
                'name' => 'thermacore-beachwood-plank-model-5740.jpg',
                'src' => 'images/upload/products/thermacore-beachwood-plank-model-5740.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 17,
                'name' => 'thermacore-cedar-plank-model-5740.jpg',
                'src' => 'images/upload/products/thermacore-cedar-plank-model-5740.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 17,
                'name' => 'thermacore-carbon-oak-plank-model-5740.jpg',
                'src' => 'images/upload/products/thermacore-carbon-oak-plank-model-5740.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 17,
                'name' => 'architizer-finalist-award-black.jpg',
                'src' => 'images/upload/products/architizer-finalist-award-black.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 18,
                'name' => 'impression-fiberglass-cherry-7800-983.jpg',
                'src' => 'images/upload/products/impression-fiberglass-cherry-7800-983.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 18,
                'name' => 'impression-fiberglass-red-oak-groove-7800-984.jpg',
                'src' => 'images/upload/products/impression-fiberglass-red-oak-groove-7800-984.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 18,
                'name' => 'impression-fiberglass-wlanut-7800-981.jpg',
                'src' => 'images/upload/products/impression-fiberglass-wlanut-7800-981.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 18,
                'name' => 'impression-fiberglass-clay-7800-983.jpg',
                'src' => 'images/upload/products/impression-fiberglass-clay-7800-983.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 19,
                'name' => 'impression-steel-black-5800-502.jpg',
                'src' => 'images/upload/products/impression-steel-black-5800-502.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 19,
                'name' => 'impression-steel-brown-5800-501.jpg',
                'src' => 'images/upload/products/impression-steel-brown-5800-501.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 19,
                'name' => 'impression-steel-white-5800.jpg',
                'src' => 'images/upload/products/impression-steel-white-5800.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 19,
                'name' => 'impression-steel-sandstone-5800.jpg',
                'src' => 'images/upload/products/impression-steel-sandstone-5800.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 20,
                'name' => 'modern-aluminum-satin-glass-black-9920.jpg',
                'src' => 'images/upload/products/modern-aluminum-satin-glass-black-9920.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 20,
                'name' => 'modern-aluminum-white-laminated-9920.jpg',
                'src' => 'images/upload/products/modern-aluminum-white-laminated-9920.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 20,
                'name' => 'modern-aluminum-satin-glass-anodized-bronze-9920.jpg',
                'src' => 'images/upload/products/modern-aluminum-satin-glass-anodized-bronze-9920.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 20,
                'name' => 'modern-aluminum-white-anodized-9920.jpg',
                'src' => 'images/upload/products/modern-aluminum-white-anodized-9920.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 20,
                'name' => 'modern-aluminum-9910-511-indoor.jpg',
                'src' => 'images/upload/products/modern-aluminum-9910-511-indoor.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 21,
                'name' => 'windstorm-5745-5765-golden-oak-arched.jpg',
                'src' => 'images/upload/products/windstorm-5745-5765-golden-oak-arched.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 21,
                'name' => 'windstorm-5745-5765-black-stockton.jpg',
                'src' => 'images/upload/products/windstorm-5745-5765-black-stockton.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 22,
                'name' => 'traditional-steel-white-1500-185.jpg',
                'src' => 'images/upload/products/traditional-steel-white-1500-185.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 22,
                'name' => 'traditional-steel-brown-1500-181.jpg',
                'src' => 'images/upload/products/traditional-steel-brown-1500-181.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 22,
                'name' => 'black-traditional-steel-1400.jpg',
                'src' => 'images/upload/products/black-traditional-steel-1400.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 22,
                'name' => 'white-traditional-steel-1400.jpg',
                'src' => 'images/upload/products/white-traditional-steel-1400.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 22,
                'name' => 'traditional-steel-mission-oak-1500-181.jpg',
                'src' => 'images/upload/products/traditional-steel-mission-oak-1500-181.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 23,
                'name' => 'sectional-warehouse-doors-content-1.jpg',
                'src' => 'images/upload/products/sectional-warehouse-doors-content-1.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 23,
                'name' => 'sectional-warehouse-doors-content-3.jpg',
                'src' => 'images/upload/products/sectional-warehouse-doors-content-3.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 23,
                'name' => 'sectional-warehouse-doors-content-4.jpg',
                'src' => 'images/upload/products/sectional-warehouse-doors-content-4.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 23,
                'name' => 'sectional-warehouse-doors-content-2.jpg',
                'src' => 'images/upload/products/sectional-warehouse-doors-content-2.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 24,
                'name' => 'rolling-service-door-610-.jpg',
                'src' => 'images/upload/products/rolling-service-door-610-.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 24,
                'name' => 'rolling-service-door-610-620-high.jpg',
                'src' => 'images/upload/products/rolling-service-door-610-620-high.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 25,
                'name' => 'rolling-sheet-770-1.jpg',
                'src' => 'images/upload/products/rolling-sheet-770-1.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 25,
                'name' => 'rolling-sheet-770-3.jpg',
                'src' => 'images/upload/products/rolling-sheet-770-3.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 26,
                'name' => 'aluminum-521s-interior.jpg',
                'src' => 'images/upload/products/aluminum-521s-interior.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 26,
                'name' => 'aluminum-521s-outside.jpg',
                'src' => 'images/upload/products/aluminum-521s-outside.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 27,
                'name' => 'rapidview---model-999-door.jpg',
                'src' => 'images/upload/products/rapidview---model-999-door.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 28,
                'name' => 'thermacore-sectional-door-599-wide-image-1.jpg',
                'src' => 'images/upload/products/thermacore-sectional-door-599-wide-image-1.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 29,
                'name' => 'industrial-brown-sectional-steel-model-424-432.jpg',
                'src' => 'images/upload/products/industrial-brown-sectional-steel-model-424-432.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 29,
                'name' => 'sectional-steel-models-420-424.jpg',
                'src' => 'images/upload/products/sectional-steel-models-420-424.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 30,
                'name' => 'rolling-service-625-fenestrated.jpg',
                'src' => 'images/upload/products/rolling-service-625-fenestrated.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 31,
                'name' => 'rld-jackshaft-operator.jpg',
                'src' => 'images/upload/products/rld-jackshaft-operator.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 32,
                'name' => 'rld-trolley-ohdanywhere.jpg',
                'src' => 'images/upload/products/rld-trolley-ohdanywhere.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 32,
                'name' => 'oprldt0011-600x487-bc87582.jpg',
                'src' => 'images/upload/products/oprldt0011-600x487-bc87582.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 33,
                'name' => 'rmz-operator.jpg',
                'src' => 'images/upload/products/rmz-operator.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 34,
                'name' => 'door-operator-rhx-explosion-proof-lrg.jpg',
                'src' => 'images/upload/products/door-operator-rhx-explosion-proof-lrg.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 34,
                'name' => 'rhx-explosion-proof-operator.jpg',
                'src' => 'images/upload/products/rhx-explosion-proof-operator.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 34,
                'name' => 'rhx-fire-operator.jpg',
                'src' => 'images/upload/products/rhx-fire-operator.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 34,
                'name' => 'rhx-explosion-proof.jpg',
                'src' => 'images/upload/products/rhx-explosion-proof.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 35,
                'name' => 'countdown-timer-display.jpg',
                'src' => 'images/upload/products/countdown-timer-display.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 36,
                'name' => 'timer-to-close-module.jpg',
                'src' => 'images/upload/products/timer-to-close-module.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 37,
                'name' => 'fire-sentinel-commercial-door.jpg',
                'src' => 'images/upload/products/fire-sentinel-commercial-door.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 38,
                'name' => 'auxiliary-output-module.jpg',
                'src' => 'images/upload/products/auxiliary-output-module.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 39,
                'name' => 'monitored-edge-interface-module.jpg',
                'src' => 'images/upload/products/monitored-edge-interface-module.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 40,
                'name' => 'single-door-external-receiver.jpg',
                'src' => 'images/upload/products/single-door-external-receiver.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 41,
                'name' => 'three-door-external-receiver.jpg',
                'src' => 'images/upload/products/three-door-external-receiver.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 42,
                'name' => 'commercial-door-transmitter.jpg',
                'src' => 'images/upload/products/commercial-door-transmitter.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 43,
                'name' => 'edge-of-dock.jpg',
                'src' => 'images/upload/products/edge-of-dock.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 43,
                'name' => 'ohd-edge-of-dock.jpg',
                'src' => 'images/upload/products/ohd-edge-of-dock.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 43,
                'name' => 'edge-of-dock-3.jpg',
                'src' => 'images/upload/products/edge-of-dock-3.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 43,
                'name' => 'edge-of-dock-4.jpg',
                'src' => 'images/upload/products/edge-of-dock-4.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 44,
                'name' => 'foam-dock-shelter.jpg',
                'src' => 'images/upload/products/foam-dock-shelter.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 45,
                'name' => 'fixed-dock-shelter.jpg',
                'src' => 'images/upload/products/fixed-dock-shelter.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 46,
                'name' => 'fixed-dock-seal.jpg',
                'src' => 'images/upload/products/fixed-dock-seal.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 47,
                'name' => 'adjustable-curtain-seal.jpg',
                'src' => 'images/upload/products/adjustable-curtain-seal.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 48,
                'name' => 'dock-bumpers-leveler.jpg',
                'src' => 'images/upload/products/dock-bumpers-leveler.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 48,
                'name' => 'dock-lights.jpg',
                'src' => 'images/upload/products/dock-lights.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 48,
                'name' => 'dock-chocks.jpg',
                'src' => 'images/upload/products/dock-chocks.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 48,
                'name' => 'dock-fan.jpg',
                'src' => 'images/upload/products/dock-fan.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
            array(
                'product_id' => 48,
                'name' => 'dock-bumpers-edge-of-dock.jpg',
                'src' => 'images/upload/products/dock-bumpers-edge-of-dock.jpg',
                'width' => 0,
                'height' => 0,
                'size' => 0,
                'type' => 'image/jpg'
            ),
        );
        
        if(count($images) > 0) {
            foreach($images as $image) {
                ProductImage::updateOrCreate([
                    'src' => $image['src']
                ],[
                    'product_id' => $image['product_id'],
                    'name' => $image['name'],
                    'width' => $image['width'],
                    'height' => $image['height'],
                    'size' => $image['size'],
                    'type' => $image['type']
                ]);
            }
        }
    }
}
