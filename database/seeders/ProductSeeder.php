<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = array(
            array(
                'title' => 'Infinity™ Wall Mount Garage Door Opener',
                'slug' => 'infinity-wall-mount-garage-door-opener',
                'sub_title' => '2000',
                'category_id' => '2',
                'description' => "<p>The Infinity™ 2000 is a quiet, powerful and compact wall-mount opener with optional OHD Anywhere® smartphone control and battery backup capabilities. Its side-mounted position is perfect for garages where the headroom is limited or space is constrained. The 24V DC motor and powerful design are capable of lifting most residential doors up to 14’ tall and weighing up to 850 lbs. See brochure for a full list of features, benefits and specifications.</p><p>The Ultimate in Power, Speed and Convenience</p>",
                'is_specification' => 1,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Destiny® 1200 Garage Door Opener',
                'slug' => 'destiny-1200-garage-door-opener',
                'sub_title' => '1200',
                'category_id' => '2',
                'description' => "<p>The Destiny® 1200 garage door opener is incredibly quiet, has the option of an integrated OHD Anywhere®, is battery backup capable and provides smooth operation with the option of belt or chain drive. The powerful 140V DC motor delivers maximum power and the speed needed to operate almost any garage door quickly and smoothly. See brochure for a full list of features, benefits and specifications.</p><p>Quiet Yet Powerful with the Ultimate in convenience</p>",
                'is_specification' => 1,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Destiny® 1500 Garage Door Opener',
                'slug' => 'destiny-1500-garage-door-opener',
                'sub_title' => '1500',
                'category_id' => '2',
                'description' => "<p>The Destiny® 1500 garage door opener features a patented direct drive system that provides the ultimate in power, reliability and speed. With optional OHD Anywhere® smartphone control and battery backup capabilities, it is intended for use with sectional doors up to 14 ft. high and one-piece doors up to 8 ft. high. See the brochure for a full list of features, benefits and specifications.</p><p>Power, Speed, Intelligence and Convenience</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Legacy® 650 Belt Garage Door Opener',
                'slug' => 'legacy-650-belt-garage-door-opener',
                'sub_title' => '650',
                'category_id' => '2',
                'description' => "<p>The Legacy® 650 garage door opener provides safety, reliability and is available with optional OHD Anywhere® and battery backup. The quiet DC motor with belt or chain drive is a great choice for those looking for safety and value. See the brochure for a full list of features, benefits and specifications.</p><p>Value and Reliability</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Legacy® 850 Garage Door Opener',
                'slug' => 'legacy-850-garage-door-opener',
                'sub_title' => '850',
                'category_id' => '2',
                'description' => "<p>The Legacy® 850 garage door opener provides power, reliability and is available with optional OHD Anywhere®, battery backup, and integrated LED lighting. The quiet DC motor with belt or chain drive is a great choice for those looking to get value and reliability without sacrificing features. See the brochure for a full list of features, benefits and specifications. </p><p>Power, Value and Reliability</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Legacy® 920 Garage Door Opener',
                'slug' => 'legacy-920-garage-door-opener',
                'sub_title' => 'MODEL 920',
                'category_id' => '2',
                'description' => "<p>The Legacy® 920 is packed with options that allow you to choose a product that best suits your needs and lifestyle. Including integrated smart phone control with OHD Anywhere® standard, optional features like battery backup, bright LED lighting, and chain or belt drive make this opener a perfect fit for almost any residential application. See the brochure for a full list of features, benefits and specifications. </p><p>Flexible Platform with Power and Reliability</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Odyssey® 1000 Garage Door Opener',
                'slug' => 'odyssey-1000-garage-door-opener',
                'sub_title' => '1000',
                'category_id' => '2',
                'description' => "<p>The Odyssey® 1000 garage door opener is incredibly quiet and is available with either a belt or chain drive. Its 140V DC motor delivers all the power and speed needed to operate almost any garage door quickly and smoothly. Optional OHD Anywhere® and battery backup add convenience and safety to this feature-packed opener. See the brochure for a full list of features, benefits and specifications.</p><p>Quiet Yet Powerful Performance</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => '3 Button Remote',
                'slug' => '3-button-remote',
                'sub_title' => 'O3T',
                'category_id' => '3',
                'description' => "<p>This sleek 3-button garage door opener remote can be used on a visor or keychain and allows easy operation of up to 3 CodeDodger® garage door openers.</p><p>This 3-button remote features a smaller, sleek overall size and 3 buttons for operation. The remote operates using patented auto seek dual frequency technology (315/390MHz) to ensure the opener will respond regardless of frequency interference and is compatible with any Overhead Door® garage door opener with CodeDodger® technology.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Garage Door Opener Master Remote',
                'slug' => 'garage-door-opener-master-remote',
                'sub_title' => 'OM3T',
                'category_id' => '3',
                'description' => "<p>The 3-Button Master Remote was designed as a replacement garage door opener remote to work with any type of Overhead Door® garage door opener manufactured since 1993. The Master Remote features LED indicators and large, easy to find buttons. </p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Universal 4-Button Garage Door and Gate Opener Remote',
                'slug' => 'universal-4-button-garage-door-and-gate-opener-remote',
                'sub_title' => 'OU4T',
                'category_id' => '3',
                'description' => "<p>The universal remote can be programmed to operate a combination of up to four garage door openers or gate receivers, reducing the clutter of multiple remotes and replacing it with a single, convenient device. Pre-programmed settings and an exclusive pairing feature make for simplified programming options. The universal remote is compact enough to fit in the palm of your hand and comes with a versatile visor clip and key ring loop in every box.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'OHD Anywhere® Wi-Fi RetroFit Kit',
                'slug' => 'ohd-anywhere-wi-fi-retroFit-kit',
                'sub_title' => 'OAKT1',
                'category_id' => '3',
                'description' => "<p>Elevate your garage experience by seamlessly integrating it with smart home platforms and delivery partners, ensuring secure and convenient package or grocery deliveries directly to your garage. Unlock a new level of connectivity with the industry's most extensive array of smart home platforms, enabling advanced features such as geo-fencing, compatibility with leading camera brands, and the ability to effortlessly automate routines with other smart products. Prioritize the safety of your home by taking control of access permissions, and receiving timely alerts for prolonged door openings, late-night activities, or instances when you're away. Simplify garage management with the convenience of operating your door from anywhere, whether through a user-friendly app or the power of your voice. Experience the ultimate in smart living with a garage that not only enhances security but also brings unparalleled ease to your daily life.​​</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Universal 3-Door Wireless Wall Console',
                'slug' => 'universal-3-door-wireless-wall-console',
                'sub_title' => 'OUWWC',
                'category_id' => '3',
                'description' => "<p>This console can control up to 3 different garage door openers and features a “Jogger Button” (10-second delay) available for use with any door button to allow extra time to safely exit the garage. The LED backlight has optional speeds and will turn red to notify you when your console batteries are running low.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Wireless Wall Console for Garage Door Openers',
                'slug' => 'wireless-wall-console-for-garage-door-openers',
                'sub_title' => 'OWWC',
                'category_id' => '3',
                'description' => "<p>This console has a single up/down door button and helpful features such as a “Jogger Button” (10 second delay), and a separate work light button to control the light on the opener. The LED backlight has optional speeds and will turn red to notify you when your console batteries are running low.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => '3 Button Remote',
                'slug' => '3-button-remote',
                'sub_title' => 'O3BT',
                'category_id' => '3',
                'description' => "<p>This 3-button remote features a larger overall size, larger buttons with a tactile feel and a clearly visible LED. The remote operates using patented auto seek dual frequency technology (315/390MHz) to ensure the opener will respond regardless of frequency interference and is compatible with any Overhead Door® garage door opener with CodeDodger® technology.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => '1-Button Remote for Overhead Door® Garage Door Openers',
                'slug' => '1-button-remote-for-overhead-door-garage-door-openers',
                'sub_title' => 'O1T',
                'category_id' => '3',
                'description' => "<p>This 1-button remote features a smaller, sleek overall size and a single button for operation. The remote operates using patented auto seek dual frequency technology (315/390MHz) to ensure the opener will respond regardless of frequency interference and is compatible with any Overhead Door® garage door opener with CodeDodger® technology.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Insulated Steel Garage Doors',
                'slug' => 'insulated-steel-garage-doors',
                'sub_title' => 'THERMACORE® COLLECTION - MODELS 5720, 5740 & 5760',
                'category_id' => '1',
                'description' => "<p>Thermacore® Collection insulated steel doors are the ideal choice for premium construction and maximum thermal efficiency. This series of doors feature construction of steel-polyurethane-steel as well as between-section seals with thermal breaks to reduce air infiltration. With several panel designs to choose from, these doors offer design flexibility, durability and thermal efficiency that will help keep your home comfortable in cold or hot climates.</p><p>Thermacore® Collection premium insulated garage doors deliver maximum thermal efficiency and design flexibility.</p><p>Learn more about our new Artisan Wood Grain™ finish options!</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Carriage House Style Garage Doors',
                'slug' => 'carriage-house-style-garage-doors',
                'sub_title' => 'COURTYARD COLLECTION® - MODELS 7520 & 7560',
                'category_id' => '1',
                'description' => "<p>Our Courtyard Collection® Models 7520 and 7560 garage doors are made with an insulated steel construction and fashioned to resemble the elegant wood designs of traditional carriage house doors. They have the beauty of wood, the durability of steel and a classic design to enhance the architectural beauty of your home. Choose from a broad selection of windows and hardware options to further customize the look of your garage door.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Insulated Steel Garage Doors',
                'slug' => 'insulated-steel-garage-doors-1',
                'sub_title' => 'THERMACORE® COLLECTION - MODELS 5720, 5740 & 5760',
                'category_id' => '1',
                'description' => "<p>Thermacore® Collection insulated steel doors are the ideal choice for premium construction and maximum thermal efficiency. This series of doors feature construction of steel-polyurethane-steel as well as between-section seals with thermal breaks to reduce air infiltration. With several panel designs to choose from, these doors offer design flexibility, durability and thermal efficiency that will help keep your home comfortable in cold or hot climates. </p><p>Thermacore® Collection premium insulated garage doors deliver maximum thermal efficiency and design flexibility.</p><p>Learn more about our new Artisan Wood Grain™ finish options!</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Carriage House Style Garage Doors',
                'slug' => 'carriage-house-style-garage-doors-1',
                'sub_title' => 'COURTYARD COLLECTION® - MODELS 7520 & 7560',
                'category_id' => '1',
                'description' => "<p>Our Courtyard Collection® Models 7520 and 7560 garage doors are made with an insulated steel construction and fashioned to resemble the elegant wood designs of traditional carriage house doors. They have the beauty of wood, the durability of steel and a classic design to enhance the architectural beauty of your home. Choose from a broad selection of windows and hardware options to further customize the look of your garage door.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Artisan Wood Grain™ Finish Collection',
                'slug' => 'artisan-wood-grain-finish-collection',
                'sub_title' => 'MODEL 5740 & MODEL 5745',
                'category_id' => '1',
                'description' => "<p>Our new Artisan Wood Grain™ finishes provide the look of real wood on our flush panel doors with a digitally printed, non-repeating grain on select Thermacore®  and Windstorm™ insulated steel doors.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Fiberglass Garage Doors',
                'slug' => 'Fiberglass Garage Doors',
                'sub_title' => 'IMPRESSION FIBERGLASS COLLECTION - MODEL 7800',
                'category_id' => '1',
                'description' => "<p>These fiberglass garage doors offer a variety of architectural styles that capture the beauty and detail of natural wood without the maintenance. These magnificently engineered doors feature an artfully molded wood-grain fiberglass surface while concealing durable steel construction, and provide quality, beauty and value to your home.</p><p>Our fiberglass doors will add warmth and ambiance to the façade of any home. After selecting the panel style and adding personal touches like window and glass design and decorative hardware, the finished garage entry is sure to reflect the best of personal style and unmatched elegance.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Impression Steel Garage Doors',
                'slug' => 'Impression Steel Garage Doors',
                'sub_title' => 'IMPRESSION STEEL COLLECTION - MODEL 5400',
                'category_id' => '1',
                'description' => "<p>Aesthetically versatile garage door design with large sections and windows to provide a dramatic effect to your home. This low maintenance steel garage door also features foamed-in-place, polyurethane insulation providing thermal efficiency with a U-factor of .15 (R-value of 12).</p><p>The Impression Steel Collection® offers Wind Load options for your garage door to protect your garage from hurricane-like winds.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Aluminum Glass Garage Doors',
                'slug' => 'Aluminum Glass Garage Doors',
                'sub_title' => 'MODERN AL​UMINUM - MODELS 9910 & 9920',
                'category_id' => '1',
                'description' => "<p>A unique look for today’s more contemporary-styled homes. Crisp lines and sleek design formed from durable corrosion-resistant aluminum frames and light-filtering glass make a striking complement to your home.</p><p>Our aluminum garage door model 9910 (511) has a standard frame featuring a narrow width and an array of frame finishes and special custom options in door sizes up to 16 Inch.</p><p>Our aluminum garage door model 9920 (521) features a wide, heavy-duty frame and offers an array of frame finishes and special custom options in door sizes up to 26’ wide. The Model 521 also offers a joint seal between sections for additional weather resistance and can be fitted to meet wind load building requirements.</p><p>Wind Load options are available for your Aluminum garage door to add protection from high-wind speeds. (LINK)</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Wind Load Garage Doors',
                'slug' => 'Wind Load Garage Doors',
                'sub_title' => 'WINDSTORM™ - MODELS 5745 & 5765',
                'category_id' => '4',
                'description' => "<p>The WindStorm™ Collection Models 5745/5765 are thermally efficient garage doors constructed of polyurethane insulation. Series 5745 (Models 901-905) features a U-factor of .15 (R-value of 12.12) and Series 5765 (Models 906-909) features an U-factor of .12 (R-value of 16.22). Offered in a variety of colors, including bi-directional wood grain colors, this collection adds beauty to your home while meeting stringent building codes and agency requirements.​</p><p>Premium insulated garage doors designed to protect your family against hurricanes, high wind damage,​ pressure changes and wind-borne debris.</p><p>Learn more about our new Artisan Wood Grain™ finish options!</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Steel Garage Doors',
                'slug' => 'Steel Garage Doors',
                'sub_title' => 'MODEL 1400, MODEL 1440, MODEL 1500, MODEL 1540, MODEL 1600',
                'category_id' => '4',
                'description' => "<p>Traditional Steel garage doors deliver the Overhead Door™ brand’s legendary performance and durability at our most affordable price. These garage doors are available with classic raised panels, wainscot-inspired design, or contemporary long panels. Two coats of baked-on polyester paint provide a low-maintenance finish that looks great, year after year.​​</p><p>These steel garage doors combine the long-lasting performance of high-quality steel with the elegance of clean lines and classic designs. Whether you want to create a subtle statement or a bolder one, our wide assortment of neutral tones will complement the architectural details of your home.</p><p>These traditional steel garage doors offer Wind Load options to protect your garage from high-wind and hurricane-like weather.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),            
            array(
                'title' => 'Sectional Warehouse Doors',
                'slug' => 'Sectional Warehouse Doors',
                'sub_title' => 'MODEL 401, MODEL 402, MODEL 403, MODEL 404, MODEL 405, MODEL 406',
                'category_id' => '5',
                'description' => "<p>Our Sectional Warehouse Doors provide a highly efficient design for strength and longevity for use in demanding commercial settings. They feature full 2” thickness for ultimate strength and durability. Optional insulation consists of 1 5/16” expanded polystyrene throughout the door. Both steel and polylaminate backer choices are available to ensure these models are well-suited for a wide range of applications.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Rolling Steel Service Doors - 610',
                'slug' => 'Rolling Steel Service Doors - 610',
                'sub_title' => 'MODEL 610',
                'category_id' => '5',
                'description' => "<p>​​​​​​​​​​​​​​​​​​​​Rolling steel door model 610 is a perennial best-seller for good reason. The standard features exceed the norm for quality and a myriad of options allow for true customization. The Model 610 is built with a standard galvanized steel curtain, or an optional stainless steel or aluminum curtain. The standard curtain slat is the attractive C-187 curved profile, with additional slat options available in curved and flat. Finishes range from four standard colors to approximately 200 powder coat colors or matched to your specification. ​ A host of other options — including motor operation, pass doors, exhaust ports, between-jambs mounting, cylinder locks and special usage packages — allow the 610 to be adapted to any environment.</p><p>Security and Storm Shelter Model 610F is a specialized option designed for storm shelters, schools and emergency operations centers. Model 610F provides tornado resistance while meeting the high wind load and impact requirements for FEMA 361.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Rolling Sheet Door - 770SS',
                'slug' => 'Rolling Sheet Door - 770SS',
                'sub_title' => 'MODEL 770SS',
                'category_id' => '5',
                'description' => "<p><b>ProStar™ Model 770SS</b></p><p>The Model 770SS rolling sh​eet door is a great option for facilities that require a quality door that installs quickly, operates dependably, and requires minimal maintenance. Like the other doors of our rolling sheet door line, this 26-gauge door features quick-connect components that simplify and speed installation while ensuring door sturdiness. Stepped counterbalance rings and a unique curtain profile ensure a tight curtain wrap resulting in a smooth operating door and minimal nesting. A host of other standard features from standard roller bearings and dual rub strips on both guide edges and both front edges of the curtain further promote smooth operation and longer life. Available in 12 standard colors, the Model 770SS represents a good choice and a good value.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Aluminum Glass Door - 521s',
                'slug' => 'Aluminum Glass Door - 521s',
                'sub_title' => 'MODEL 521s',
                'category_id' => '5',
                'description' => "<p>EverServe Aluminum Glass Door model 521S is a sectional aluminum door appropriate for environments where maximum light infiltration and/or visual access is required. Designed to fit openings up to 20\'2\" (6147 mm) wide and 18\'1\" (5512 mm) high, the Model 521 features a wide, 2-11/16\" (68 mm) center stile, 3-3/4\" (95 mm) or 4-1/2\" (114 mm) bottom rail, based on door size.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'High Speed Exterior Full-View Metal Door - 999',
                'slug' => 'High Speed Exterior Full-View Metal Door - 999',
                'sub_title' => 'MODEL 999',
                'category_id' => '5',
                'description' => "<p>Sleek and sophisticated RapidView® Model 999 is a full view door featuring scratch-resistant polycarbonate panels with opening speeds up to 80” per second. Engineered for high cycles and easy operation, RapidView® Model 999 has been independently tested and is capable of wind load up to 50 psf*. The simple install and low maintenance add to the attractiveness of the door and features completely hinged guides, fully assembled curtains and pre-wired motor connection. RapidView® Model 999 is perfect for high traffic applications requiring aesthetic appeal and visibility.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Thermacore® Sectional Steel Door - 599',
                'slug' => 'Thermacore® Sectional Steel Door - 599',
                'sub_title' => 'MODEL 599',
                'category_id' => '5',
                'description' => "<p>With a U-factor of .10 (R-value of 17.5), and one of the best overall air infiltration ratings in the industry, the Thermacore® Sectional Steel Door Model 599 is one of the most thermally efficient door systems in its class. The Model 599 doors also carry a Class 26 sound transmission rating for applications where sound suppression is desirable.</p><p>The Thermacore® line features steel-polyurethane-steel panel construction which provides a thermal barrier that withstands extremely hot or cold climates and the most demanding environmental requirements.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Sectional Steel Door Model 424',
                'slug' => 'Sectional Steel Door Model 424',
                'sub_title' => 'MODEL 424',
                'category_id' => '5',
                'description' => "<p>Section Steel Door model 424 are designed for heavy-duty use in a variety of commercial and industrial applications. This door features a 2\" (51 mm) panel thickness, 16-gauge steel intermediate and end stiles, ribbed steel exterior and a white paint finish. The Model 424 is available in sizes up to 30´2\" (9195 mm) in width and 24´1\" (7341 mm) in height, and is also available in Industrial Brown. Numerous options including weather stripping, reinforced struts, movable center posts and motor operation allow these heavy-duty doors to meet nearly any project requirements.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Rolling Steel Service Door - 625S',
                'slug' => 'Rolling Steel Service Door - 625S',
                'sub_title' => 'MODEL 625S',
                'category_id' => '5',
                'description' => "<p>This heavy duty Stormtite™ insulated springless service door delivers security, reliability and ease of serviceability and is best suited for applications that require protection against weather extremes. The insulated slats provide climate control as well as sound reduction, while perimeter seals provide additional protection from weather. </p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),

            array(
                'title' => 'RLD™ Jackshaft Operator',
                'slug' => 'RLD™ Jackshaft Operator',
                'sub_title' => 'LIGHT DUTY',
                'category_id' => '7',
                'description' => "<p>The RLD Jackshaft is designed standard for Rolling Steel doors and for standard, high, and vertical-lift Sectional doors that have up to a 15-cycle/hour and less than a 30-cycle/day requirement. Designed for reliability with leading innovative features, the light-duty jackshaft sets a new standard in the industry.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'RLD™ Trolley Operator',
                'slug' => 'RLD™ Trolley Operator',
                'sub_title' => 'LIGHT DUTY TROLLEY',
                'category_id' => '7',
                'description' => "<p>The RLD™ Trolley for sectional doors is designed for standard-lift doors that have up to a 12-cycle/hour and less than a 30-cycle/day requirement. Designed for reliability with leading innovative features, the light-duty trolley sets a new standard in the industry.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'RMZ Commercial Door Operator',
                'slug' => 'RMZ Commercial Door Operator',
                'sub_title' => 'Z SERIES',
                'category_id' => '7',
                'description' => "<p>The new Z Series RMZ Hoist is designed for high or full-lift sectional and rolling doors that have a limited duty cycle requirement. Advanced features and robust mechanical design combine to provide a mediumduty operator that is the new standard in the industry.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'RHX® Explosion-Proof Operator',
                'slug' => 'RHX® Explosion-Proof Operator',
                'sub_title' => 'HEAVY DUTY',
                'category_id' => '7',
                'description' => "<p>This heavy duty Stormtite™ insulated springless service door delivers security, reliability and ease of serviceability and is best suited for applications that require protection against weather extremes. The insulated slats provide climate control as well as sound reduction, while perimeter seals provide additional protection from weather. </p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Countdown Timer Display',
                'slug' => 'Countdown Timer Display',
                'sub_title' => null,
                'category_id' => '6',
                'description' => "<p>The new standard in providing commercial door operating status to vehicle or pedestrian traffic with complete visual information of the door's pending movements. The Countdown Timer enhances traffic flow, helps reduce expensive door damage, and improves safety by notifying drivers when the door will begin closing, reducing the risk of the door closing on a vehicle.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Timer Close Module',
                'slug' => 'Timer Close Module',
                'sub_title' => 'TCM',
                'category_id' => '6',
                'description' => "<p>The Timer Close Module provides an automatic door closing feature that is easily installed and automatically recognized by the operator system. The timer can be selected to start when the door is opened from inputs such as the open button on the wall control, optional radio control input or auxiliary open input via an optional device. The module is installed in the operator electronic box and connects to the main circuit board through an expansion port connector.</p><ul><li>Easily expand the features of your commercial operator with an optional Timer Close Module board. The Timer to Close Module provides an automatic door closing feature that is easily installed and automatically recognized by the operator system.</li><li>The Timer Close Module is available for the following commercial door operators: RHX®, RSX®, RMZ™ and CDX®</li></ul>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Fire Sentinel',
                'slug' => 'Fire Sentinel',
                'sub_title' => null,
                'category_id' => '6',
                'description' => "<p>The adjustable alarm time delay is factory set at 10 seconds but can be adjusted using a dipswitch to change the time for anywhere between 10-60 seconds. The auxiliary 24v DC output can be used to activate additional power devices. The Fire Sentinel comes with back-up power to avoid automatic closure during power failures. It has an ADA sounder/strobe warning before the door closes to alert people that the door is about to close. The fail-to-close safety timer gives you additional assurance of the maximum possible closure. The device will cause the door to stop if there is an obstruction in its pathway. The floor-level trouble indicator provides a visual indication of trouble from the floor.</p><p>The Fire Sentinel can be used with these commercial fire-rated doors: 630 , 631, 634, 635, 640, 641, 660, 661, or 662.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Auxiliary Output Module',
                'slug' => 'Auxiliary Output Module',
                'sub_title' => 'AOM',
                'category_id' => '6',
                'description' => "<p>The Auxiliary Output Module provides dry relay contacts at door limit positions, as well as lamp output contacts and a selectable Americans with Disabilities Act output to sound a horn or run a flashing light. The module is installed in the operator electric box and connects to the main circuit board through an expansion port connector.</p><ul><li>Easily expand the features of your commercial operator with an optional Auxiliary Output Module board. The Timer to Close Module provides an automatic door closing feature that is easily installed and automatically recognized by the operator system.</li><li>The Auxiliary Output Module is available for the following commercial door operators: RHX®, RSX®, RMZ™ and CDX®.</li></ul>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Monitored Edge Interface Module',
                'slug' => 'Monitored Edge Interface Module',
                'sub_title' => null,
                'category_id' => '6',
                'description' => "<p>The UL 325 compliant Monitored Edge Interface Module allows the operator to monitor the sensing edge; providing advanced safety and security to the door system. This module serves as an interface between T3/DC two-wire monitored sensing edges and our operators. The module installs easily and is automatically recognized by our operators.</p><ul><li>To maintain UL 325 compliance when using a sensing edge as a primary safety device you must use either the Monitored Edge Interface Module or the Timer Close Module.</li></ul>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Single Door External Receiver',
                'slug' => 'Single Door External Receiver',
                'sub_title' => 'OCR1D',
                'category_id' => '6',
                'description' => "<p>This external receiver uses CodeDodger® technology to provide increased security on older openers and to help reduce chances of signal interference. The Overhead Door™ external receiver is compatible with most major brands of garage door and gate openers.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Three Door External Receiver',
                'slug' => 'Three Door External Receiver',
                'sub_title' => null,
                'category_id' => '6',
                'description' => "<p>The Overhead Door® Three Door External Receiver is ideal for applications upgrading from fixed code to more secure CodeDodger® remote controls, or for applications using a single three button remote on facilities having mixed brands of operators.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Commercial Operator Radio Transmitters',
                'slug' => 'Commercial Operator Radio Transmitters',
                'sub_title' => null,
                'category_id' => '6',
                'description' => "<p>Radio transmitters may be one, two, three, four-button, or open/close/stop. Available for all commercial operators.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),      
            array(
                'title' => 'Edge of Dock Leveler',
                'slug' => 'Edge of Dock Leveler',
                'sub_title' => 'E66R & E72R',
                'category_id' => '8',
                'description' => "<p>Smooth Building-To-Truck Transition</p><ul><li>Designed to minimize bumps, gaps and damage to cargo and material handling equipment</li><li>Reduces shocks and jolts to workers</li><li>Facilitates fast movement of material handling equipment and forklifts</li></ul><p>Easy and Safe Deployment</p><ul><li>Handle is easy to push/pull for comfortable and fast operation</li><li>Handle range of motion keeps workers in a comfortable position</li><li>Reduces bumps and trip hazards on deck and lip</li></ul><p>Durable Design and Finish</p><ul><li>Rugged construction of lip and deck hinge provides durability for years of service</li><li>Lip hinge sheds debris minimizing trapping and grinding between the lip deck junction causing fatigue</li><li>Textured powder coat finish provides better traction for safety and helps to increase productivity. This durable finish also provides better corrosion protection and adhesion compared to wet paint</li><li>Compliant with ANSI MH30.1-2022 which includes rigorous load testing requirements</li></ul><p>Environmentally Friendly</p><ul><li>Compared to paint, our powder coat process has major environmental advantages</li></ul>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Foam Dock Shelter',
                'slug' => 'Foam Dock Shelter',
                'sub_title' => 'TM70R',
                'category_id' => '8',
                'description' => "<p>Impactable L-shaped columns hug the trailer to help seal out the weather. Along with the adjustable curtains, this shelter accommodates a wide variety of trailers with different widths and heights. It also provides access to the full width and height of the trailer.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Fixed Dock Shelter',
                'slug' => 'Fixed Dock Shelter',
                'sub_title' => 'TX40R',
                'category_id' => '8',
                'description' => "<p>This shelter has flexible vertical panels and a curtain to serve a wide variety of trailers with different widths and heights, while still providing weather protection to save on heating/cooling costs. It provides full width and height access to the back of the trailer.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Fixed Dock Seal',
                'slug' => 'Fixed Dock Seal',
                'sub_title' => 'LX10R',
                'category_id' => '8',
                'description' => "<p>When compressed by the trailer, the top pad and side columns provide the best seal between the inside/outside areas around the door opening.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Adjustable Curtain Dock Seal',
                'slug' => 'Adjustable Curtain Dock Seal',
                'sub_title' => 'LC20R',
                'category_id' => '8',
                'description' => "<p>Our seal with an adjustable top curtain is designed to accommodate varying trailer heights while providing superior weather protection. Save on heating/cooling costs with this innovative solution that closes gaps and helps protect against harsh weather.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
            array(
                'title' => 'Dock Accessories',
                'slug' => 'Dock Accessories',
                'sub_title' => 'ESSENTIALS',
                'category_id' => '8',
                'description' => "<p>Outfit your dock with essential accessories so the loading process is safe and efficient: lights, fans, bumpers, track guards, trailer chocks.</p>",
                'is_specification' => 0,
                'is_feature' => 0,
                'features' => "",
                'is_active' => 1
            ),
        );

        if(count($products) > 0) {
            foreach($products as $prod) {
                Product::updateOrCreate([
                    'title' => $prod['title'],
                    'category_id' => $prod['category_id']
                ],[
                    'sub_title' => $prod['sub_title'],
                    'description' => $prod['description'],
                    'is_specification' => $prod['is_specification'],
                    'is_feature' => $prod['is_feature'],
                    'features' => $prod['features'],
                    'is_active' => $prod['is_active']
                ]);
            }
        }
    }
}
