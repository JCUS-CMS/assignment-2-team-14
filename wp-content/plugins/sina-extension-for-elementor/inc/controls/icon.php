<?php
namespace Sina_Extension;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use \Elementor\Base_Data_Control;

/**
 * Sina_Ext_Icon icon control.
 *
 * Sina_Ext_Icon class extends the icons.
 *
 * @since 3.0.1
 */
class Sina_Ext_Icon extends Base_Data_Control{

	/**
	 * Get icon control type.
	 *
	 * Retrieve the control type, in this case `icon`.
	 *
	 * @since 3.0.1
	 * @access public
	 *
	 * @return string Control type.
	 */
	public function get_type() {
		return 'icon';
	}

	/**
	 * Get icons.
	 *
	 * Retrieve all the available icons.
	 *
	 * @since 3.0.1
	 * @access public
	 * @static
	 *
	 * @return array Available icons.
	 */
	public static function get_icons() {
		return [
			'icofont icofont-angry-monster' => 'icofont-angry-monster',
			'icofont icofont-bathtub' => 'icofont-bathtub',
			'icofont icofont-bird-wings' => 'icofont-bird-wings',
			'icofont icofont-bow' => 'icofont-bow',
			'icofont icofont-castle' => 'icofont-castle',
			'icofont icofont-circuit' => 'icofont-circuit',
			'icofont icofont-crown-king' => 'icofont-crown-king',
			'icofont icofont-crown-queen' => 'icofont-crown-queen',
			'icofont icofont-dart' => 'icofont-dart',
			'icofont icofont-disability-race' => 'icofont-disability-race',
			'icofont icofont-diving-goggle' => 'icofont-diving-goggle',
			'icofont icofont-eye-open' => 'icofont-eye-open',
			'icofont icofont-flora-flower' => 'icofont-flora-flower',
			'icofont icofont-flora' => 'icofont-flora',
			'icofont icofont-gift-box' => 'icofont-gift-box',
			'icofont icofont-halloween-pumpkin' => 'icofont-halloween-pumpkin',
			'icofont icofont-hand-power' => 'icofont-hand-power',
			'icofont icofont-hand-thunder' => 'icofont-hand-thunder',
			'icofont icofont-king-monster' => 'icofont-king-monster',
			'icofont icofont-love' => 'icofont-love',
			'icofont icofont-magician-hat' => 'icofont-magician-hat',
			'icofont icofont-native-american' => 'icofont-native-american',
			'icofont icofont-owl-look' => 'icofont-owl-look',
			'icofont icofont-phoenix' => 'icofont-phoenix',
			'icofont icofont-robot-face' => 'icofont-robot-face',
			'icofont icofont-sand-clock' => 'icofont-sand-clock',
			'icofont icofont-shield-alt' => 'icofont-shield-alt',
			'icofont icofont-ship-wheel' => 'icofont-ship-wheel',
			'icofont icofont-skull-danger' => 'icofont-skull-danger',
			'icofont icofont-skull-face' => 'icofont-skull-face',
			'icofont icofont-snowmobile' => 'icofont-snowmobile',
			'icofont icofont-space-shuttle' => 'icofont-space-shuttle',
			'icofont icofont-star-shape' => 'icofont-star-shape',
			'icofont icofont-swirl' => 'icofont-swirl',
			'icofont icofont-tattoo-wing' => 'icofont-tattoo-wing',
			'icofont icofont-throne' => 'icofont-throne',
			'icofont icofont-tree-alt' => 'icofont-tree-alt',
			'icofont icofont-triangle' => 'icofont-triangle',
			'icofont icofont-unity-hand' => 'icofont-unity-hand',
			'icofont icofont-weed' => 'icofont-weed',
			'icofont icofont-woman-bird' => 'icofont-woman-bird',
			'icofont icofont-bat' => 'icofont-bat',
			'icofont icofont-bear-face' => 'icofont-bear-face',
			'icofont icofont-bear-tracks' => 'icofont-bear-tracks',
			'icofont icofont-bear' => 'icofont-bear',
			'icofont icofont-bird-alt' => 'icofont-bird-alt',
			'icofont icofont-bird-flying' => 'icofont-bird-flying',
			'icofont icofont-bird' => 'icofont-bird',
			'icofont icofont-birds' => 'icofont-birds',
			'icofont icofont-bone' => 'icofont-bone',
			'icofont icofont-bull' => 'icofont-bull',
			'icofont icofont-butterfly-alt' => 'icofont-butterfly-alt',
			'icofont icofont-butterfly' => 'icofont-butterfly',
			'icofont icofont-camel-alt' => 'icofont-camel-alt',
			'icofont icofont-camel-head' => 'icofont-camel-head',
			'icofont icofont-camel' => 'icofont-camel',
			'icofont icofont-cat-alt-1' => 'icofont-cat-alt-1',
			'icofont icofont-cat-alt-2' => 'icofont-cat-alt-2',
			'icofont icofont-cat-alt-3' => 'icofont-cat-alt-3',
			'icofont icofont-cat-dog' => 'icofont-cat-dog',
			'icofont icofont-cat-face' => 'icofont-cat-face',
			'icofont icofont-cat' => 'icofont-cat',
			'icofont icofont-cow-head' => 'icofont-cow-head',
			'icofont icofont-cow' => 'icofont-cow',
			'icofont icofont-crab' => 'icofont-crab',
			'icofont icofont-crocodile' => 'icofont-crocodile',
			'icofont icofont-deer-head' => 'icofont-deer-head',
			'icofont icofont-dog-alt' => 'icofont-dog-alt',
			'icofont icofont-dog-barking' => 'icofont-dog-barking',
			'icofont icofont-dog' => 'icofont-dog',
			'icofont icofont-dolphin' => 'icofont-dolphin',
			'icofont icofont-duck-tracks' => 'icofont-duck-tracks',
			'icofont icofont-eagle-head' => 'icofont-eagle-head',
			'icofont icofont-eaten-fish' => 'icofont-eaten-fish',
			'icofont icofont-elephant-alt' => 'icofont-elephant-alt',
			'icofont icofont-elephant-head-alt' => 'icofont-elephant-head-alt',
			'icofont icofont-elephant-head' => 'icofont-elephant-head',
			'icofont icofont-elephant' => 'icofont-elephant',
			'icofont icofont-elk' => 'icofont-elk',
			'icofont icofont-fish-1' => 'icofont-fish-1',
			'icofont icofont-fish-2' => 'icofont-fish-2',
			'icofont icofont-fish-3' => 'icofont-fish-3',
			'icofont icofont-fish-4' => 'icofont-fish-4',
			'icofont icofont-fish-5' => 'icofont-fish-5',
			'icofont icofont-fish' => 'icofont-fish',
			'icofont icofont-fox-alt' => 'icofont-fox-alt',
			'icofont icofont-fox' => 'icofont-fox',
			'icofont icofont-frog-tracks' => 'icofont-frog-tracks',
			'icofont icofont-frog' => 'icofont-frog',
			'icofont icofont-froggy' => 'icofont-froggy',
			'icofont icofont-giraffe-head-1' => 'icofont-giraffe-head-1',
			'icofont icofont-giraffe-head-2' => 'icofont-giraffe-head-2',
			'icofont icofont-giraffe-head' => 'icofont-giraffe-head',
			'icofont icofont-giraffe' => 'icofont-giraffe',
			'icofont icofont-goat-head' => 'icofont-goat-head',
			'icofont icofont-gorilla' => 'icofont-gorilla',
			'icofont icofont-hen-tracks' => 'icofont-hen-tracks',
			'icofont icofont-horse-head-1' => 'icofont-horse-head-1',
			'icofont icofont-horse-head-2' => 'icofont-horse-head-2',
			'icofont icofont-horse-head' => 'icofont-horse-head',
			'icofont icofont-horse-tracks' => 'icofont-horse-tracks',
			'icofont icofont-jellyfish' => 'icofont-jellyfish',
			'icofont icofont-kangaroo' => 'icofont-kangaroo',
			'icofont icofont-lemur' => 'icofont-lemur',
			'icofont icofont-lion-head-1' => 'icofont-lion-head-1',
			'icofont icofont-lion-head-2' => 'icofont-lion-head-2',
			'icofont icofont-lion-head' => 'icofont-lion-head',
			'icofont icofont-lion' => 'icofont-lion',
			'icofont icofont-monkey-2' => 'icofont-monkey-2',
			'icofont icofont-monkey-3' => 'icofont-monkey-3',
			'icofont icofont-monkey-face' => 'icofont-monkey-face',
			'icofont icofont-monkey' => 'icofont-monkey',
			'icofont icofont-octopus-alt' => 'icofont-octopus-alt',
			'icofont icofont-octopus' => 'icofont-octopus',
			'icofont icofont-owl' => 'icofont-owl',
			'icofont icofont-panda-face' => 'icofont-panda-face',
			'icofont icofont-panda' => 'icofont-panda',
			'icofont icofont-panther' => 'icofont-panther',
			'icofont icofont-parrot-lip' => 'icofont-parrot-lip',
			'icofont icofont-parrot' => 'icofont-parrot',
			'icofont icofont-paw' => 'icofont-paw',
			'icofont icofont-pelican' => 'icofont-pelican',
			'icofont icofont-penguin' => 'icofont-penguin',
			'icofont icofont-pig-face' => 'icofont-pig-face',
			'icofont icofont-pig' => 'icofont-pig',
			'icofont icofont-pigeon-1' => 'icofont-pigeon-1',
			'icofont icofont-pigeon-2' => 'icofont-pigeon-2',
			'icofont icofont-pigeon' => 'icofont-pigeon',
			'icofont icofont-rabbit' => 'icofont-rabbit',
			'icofont icofont-rat' => 'icofont-rat',
			'icofont icofont-rhino-head' => 'icofont-rhino-head',
			'icofont icofont-rhino' => 'icofont-rhino',
			'icofont icofont-rooster' => 'icofont-rooster',
			'icofont icofont-seahorse' => 'icofont-seahorse',
			'icofont icofont-seal' => 'icofont-seal',
			'icofont icofont-shrimp-alt' => 'icofont-shrimp-alt',
			'icofont icofont-shrimp' => 'icofont-shrimp',
			'icofont icofont-snail-1' => 'icofont-snail-1',
			'icofont icofont-snail-2' => 'icofont-snail-2',
			'icofont icofont-snail-3' => 'icofont-snail-3',
			'icofont icofont-snail' => 'icofont-snail',
			'icofont icofont-snake' => 'icofont-snake',
			'icofont icofont-squid' => 'icofont-squid',
			'icofont icofont-squirrel' => 'icofont-squirrel',
			'icofont icofont-tiger-face' => 'icofont-tiger-face',
			'icofont icofont-tiger' => 'icofont-tiger',
			'icofont icofont-turtle' => 'icofont-turtle',
			'icofont icofont-whale' => 'icofont-whale',
			'icofont icofont-woodpecker' => 'icofont-woodpecker',
			'icofont icofont-zebra' => 'icofont-zebra',
			'icofont icofont-brand-acer' => 'icofont-brand-acer',
			'icofont icofont-brand-adidas' => 'icofont-brand-adidas',
			'icofont icofont-brand-adobe' => 'icofont-brand-adobe',
			'icofont icofont-brand-air-new-zealand' => 'icofont-brand-air-new-zealand',
			'icofont icofont-brand-airbnb' => 'icofont-brand-airbnb',
			'icofont icofont-brand-aircell' => 'icofont-brand-aircell',
			'icofont icofont-brand-airtel' => 'icofont-brand-airtel',
			'icofont icofont-brand-alcatel' => 'icofont-brand-alcatel',
			'icofont icofont-brand-alibaba' => 'icofont-brand-alibaba',
			'icofont icofont-brand-aliexpress' => 'icofont-brand-aliexpress',
			'icofont icofont-brand-alipay' => 'icofont-brand-alipay',
			'icofont icofont-brand-amazon' => 'icofont-brand-amazon',
			'icofont icofont-brand-amd' => 'icofont-brand-amd',
			'icofont icofont-brand-american-airlines' => 'icofont-brand-american-airlines',
			'icofont icofont-brand-android-robot' => 'icofont-brand-android-robot',
			'icofont icofont-brand-android' => 'icofont-brand-android',
			'icofont icofont-brand-aol' => 'icofont-brand-aol',
			'icofont icofont-brand-apple' => 'icofont-brand-apple',
			'icofont icofont-brand-appstore' => 'icofont-brand-appstore',
			'icofont icofont-brand-asus' => 'icofont-brand-asus',
			'icofont icofont-brand-ati' => 'icofont-brand-ati',
			'icofont icofont-brand-att' => 'icofont-brand-att',
			'icofont icofont-brand-audi' => 'icofont-brand-audi',
			'icofont icofont-brand-axiata' => 'icofont-brand-axiata',
			'icofont icofont-brand-bada' => 'icofont-brand-bada',
			'icofont icofont-brand-bbc' => 'icofont-brand-bbc',
			'icofont icofont-brand-bing' => 'icofont-brand-bing',
			'icofont icofont-brand-blackberry' => 'icofont-brand-blackberry',
			'icofont icofont-brand-bmw' => 'icofont-brand-bmw',
			'icofont icofont-brand-box' => 'icofont-brand-box',
			'icofont icofont-brand-burger-king' => 'icofont-brand-burger-king',
			'icofont icofont-brand-business-insider' => 'icofont-brand-business-insider',
			'icofont icofont-brand-buzzfeed' => 'icofont-brand-buzzfeed',
			'icofont icofont-brand-cannon' => 'icofont-brand-cannon',
			'icofont icofont-brand-casio' => 'icofont-brand-casio',
			'icofont icofont-brand-china-mobile' => 'icofont-brand-china-mobile',
			'icofont icofont-brand-china-telecom' => 'icofont-brand-china-telecom',
			'icofont icofont-brand-china-unicom' => 'icofont-brand-china-unicom',
			'icofont icofont-brand-cisco' => 'icofont-brand-cisco',
			'icofont icofont-brand-citibank' => 'icofont-brand-citibank',
			'icofont icofont-brand-cnet' => 'icofont-brand-cnet',
			'icofont icofont-brand-cnn' => 'icofont-brand-cnn',
			'icofont icofont-brand-cocal-cola' => 'icofont-brand-cocal-cola',
			'icofont icofont-brand-compaq' => 'icofont-brand-compaq',
			'icofont icofont-brand-debian' => 'icofont-brand-debian',
			'icofont icofont-brand-delicious' => 'icofont-brand-delicious',
			'icofont icofont-brand-dell' => 'icofont-brand-dell',
			'icofont icofont-brand-designbump' => 'icofont-brand-designbump',
			'icofont icofont-brand-designfloat' => 'icofont-brand-designfloat',
			'icofont icofont-brand-disney' => 'icofont-brand-disney',
			'icofont icofont-brand-dodge' => 'icofont-brand-dodge',
			'icofont icofont-brand-dove' => 'icofont-brand-dove',
			'icofont icofont-brand-drupal' => 'icofont-brand-drupal',
			'icofont icofont-brand-ebay' => 'icofont-brand-ebay',
			'icofont icofont-brand-eleven' => 'icofont-brand-eleven',
			'icofont icofont-brand-emirates' => 'icofont-brand-emirates',
			'icofont icofont-brand-espn' => 'icofont-brand-espn',
			'icofont icofont-brand-etihad-airways' => 'icofont-brand-etihad-airways',
			'icofont icofont-brand-etisalat' => 'icofont-brand-etisalat',
			'icofont icofont-brand-etsy' => 'icofont-brand-etsy',
			'icofont icofont-brand-fastrack' => 'icofont-brand-fastrack',
			'icofont icofont-brand-fedex' => 'icofont-brand-fedex',
			'icofont icofont-brand-ferrari' => 'icofont-brand-ferrari',
			'icofont icofont-brand-fitbit' => 'icofont-brand-fitbit',
			'icofont icofont-brand-flikr' => 'icofont-brand-flikr',
			'icofont icofont-brand-forbes' => 'icofont-brand-forbes',
			'icofont icofont-brand-foursquare' => 'icofont-brand-foursquare',
			'icofont icofont-brand-foxconn' => 'icofont-brand-foxconn',
			'icofont icofont-brand-fujitsu' => 'icofont-brand-fujitsu',
			'icofont icofont-brand-general-electric' => 'icofont-brand-general-electric',
			'icofont icofont-brand-gillette' => 'icofont-brand-gillette',
			'icofont icofont-brand-gizmodo' => 'icofont-brand-gizmodo',
			'icofont icofont-brand-gnome' => 'icofont-brand-gnome',
			'icofont icofont-brand-google' => 'icofont-brand-google',
			'icofont icofont-brand-gopro' => 'icofont-brand-gopro',
			'icofont icofont-brand-gucci' => 'icofont-brand-gucci',
			'icofont icofont-brand-hallmark' => 'icofont-brand-hallmark',
			'icofont icofont-brand-hi5' => 'icofont-brand-hi5',
			'icofont icofont-brand-honda' => 'icofont-brand-honda',
			'icofont icofont-brand-hp' => 'icofont-brand-hp',
			'icofont icofont-brand-hsbc' => 'icofont-brand-hsbc',
			'icofont icofont-brand-htc' => 'icofont-brand-htc',
			'icofont icofont-brand-huawei' => 'icofont-brand-huawei',
			'icofont icofont-brand-hulu' => 'icofont-brand-hulu',
			'icofont icofont-brand-hyundai' => 'icofont-brand-hyundai',
			'icofont icofont-brand-ibm' => 'icofont-brand-ibm',
			'icofont icofont-brand-icofont' => 'icofont-brand-icofont',
			'icofont icofont-brand-icq' => 'icofont-brand-icq',
			'icofont icofont-brand-ikea' => 'icofont-brand-ikea',
			'icofont icofont-brand-imdb' => 'icofont-brand-imdb',
			'icofont icofont-brand-indiegogo' => 'icofont-brand-indiegogo',
			'icofont icofont-brand-intel' => 'icofont-brand-intel',
			'icofont icofont-brand-ipair' => 'icofont-brand-ipair',
			'icofont icofont-brand-jaguar' => 'icofont-brand-jaguar',
			'icofont icofont-brand-java' => 'icofont-brand-java',
			'icofont icofont-brand-joomla' => 'icofont-brand-joomla',
			'icofont icofont-brand-kickstarter' => 'icofont-brand-kickstarter',
			'icofont icofont-brand-kik' => 'icofont-brand-kik',
			'icofont icofont-brand-lastfm' => 'icofont-brand-lastfm',
			'icofont icofont-brand-lego' => 'icofont-brand-lego',
			'icofont icofont-brand-lenovo' => 'icofont-brand-lenovo',
			'icofont icofont-brand-levis' => 'icofont-brand-levis',
			'icofont icofont-brand-lexus' => 'icofont-brand-lexus',
			'icofont icofont-brand-lg' => 'icofont-brand-lg',
			'icofont icofont-brand-life-hacker' => 'icofont-brand-life-hacker',
			'icofont icofont-brand-linux-mint' => 'icofont-brand-linux-mint',
			'icofont icofont-brand-linux' => 'icofont-brand-linux',
			'icofont icofont-brand-lionix' => 'icofont-brand-lionix',
			'icofont icofont-brand-loreal' => 'icofont-brand-loreal',
			'icofont icofont-brand-louis-vuitton' => 'icofont-brand-louis-vuitton',
			'icofont icofont-brand-mac-os' => 'icofont-brand-mac-os',
			'icofont icofont-brand-marvel-app' => 'icofont-brand-marvel-app',
			'icofont icofont-brand-mashable' => 'icofont-brand-mashable',
			'icofont icofont-brand-mazda' => 'icofont-brand-mazda',
			'icofont icofont-brand-mcdonals' => 'icofont-brand-mcdonals',
			'icofont icofont-brand-mercedes' => 'icofont-brand-mercedes',
			'icofont icofont-brand-micromax' => 'icofont-brand-micromax',
			'icofont icofont-brand-microsoft' => 'icofont-brand-microsoft',
			'icofont icofont-brand-mobileme' => 'icofont-brand-mobileme',
			'icofont icofont-brand-mobily' => 'icofont-brand-mobily',
			'icofont icofont-brand-motorola' => 'icofont-brand-motorola',
			'icofont icofont-brand-msi' => 'icofont-brand-msi',
			'icofont icofont-brand-mts' => 'icofont-brand-mts',
			'icofont icofont-brand-myspace' => 'icofont-brand-myspace',
			'icofont icofont-brand-mytv' => 'icofont-brand-mytv',
			'icofont icofont-brand-nasa' => 'icofont-brand-nasa',
			'icofont icofont-brand-natgeo' => 'icofont-brand-natgeo',
			'icofont icofont-brand-nbc' => 'icofont-brand-nbc',
			'icofont icofont-brand-nescafe' => 'icofont-brand-nescafe',
			'icofont icofont-brand-nestle' => 'icofont-brand-nestle',
			'icofont icofont-brand-netflix' => 'icofont-brand-netflix',
			'icofont icofont-brand-nexus' => 'icofont-brand-nexus',
			'icofont icofont-brand-nike' => 'icofont-brand-nike',
			'icofont icofont-brand-nokia' => 'icofont-brand-nokia',
			'icofont icofont-brand-nvidia' => 'icofont-brand-nvidia',
			'icofont icofont-brand-omega' => 'icofont-brand-omega',
			'icofont icofont-brand-opensuse' => 'icofont-brand-opensuse',
			'icofont icofont-brand-oracle' => 'icofont-brand-oracle',
			'icofont icofont-brand-panasonic' => 'icofont-brand-panasonic',
			'icofont icofont-brand-paypal' => 'icofont-brand-paypal',
			'icofont icofont-brand-pepsi' => 'icofont-brand-pepsi',
			'icofont icofont-brand-philips' => 'icofont-brand-philips',
			'icofont icofont-brand-pizza-hut' => 'icofont-brand-pizza-hut',
			'icofont icofont-brand-playstation' => 'icofont-brand-playstation',
			'icofont icofont-brand-puma' => 'icofont-brand-puma',
			'icofont icofont-brand-qatar-air' => 'icofont-brand-qatar-air',
			'icofont icofont-brand-qvc' => 'icofont-brand-qvc',
			'icofont icofont-brand-readernaut' => 'icofont-brand-readernaut',
			'icofont icofont-brand-redbull' => 'icofont-brand-redbull',
			'icofont icofont-brand-reebok' => 'icofont-brand-reebok',
			'icofont icofont-brand-reuters' => 'icofont-brand-reuters',
			'icofont icofont-brand-samsung' => 'icofont-brand-samsung',
			'icofont icofont-brand-sap' => 'icofont-brand-sap',
			'icofont icofont-brand-saudia-airlines' => 'icofont-brand-saudia-airlines',
			'icofont icofont-brand-scribd' => 'icofont-brand-scribd',
			'icofont icofont-brand-shell' => 'icofont-brand-shell',
			'icofont icofont-brand-siemens' => 'icofont-brand-siemens',
			'icofont icofont-brand-sk-telecom' => 'icofont-brand-sk-telecom',
			'icofont icofont-brand-slideshare' => 'icofont-brand-slideshare',
			'icofont icofont-brand-smashing-magazine' => 'icofont-brand-smashing-magazine',
			'icofont icofont-brand-snapchat' => 'icofont-brand-snapchat',
			'icofont icofont-brand-sony-ericsson' => 'icofont-brand-sony-ericsson',
			'icofont icofont-brand-sony' => 'icofont-brand-sony',
			'icofont icofont-brand-soundcloud' => 'icofont-brand-soundcloud',
			'icofont icofont-brand-sprint' => 'icofont-brand-sprint',
			'icofont icofont-brand-squidoo' => 'icofont-brand-squidoo',
			'icofont icofont-brand-starbucks' => 'icofont-brand-starbucks',
			'icofont icofont-brand-stc' => 'icofont-brand-stc',
			'icofont icofont-brand-steam' => 'icofont-brand-steam',
			'icofont icofont-brand-suzuki' => 'icofont-brand-suzuki',
			'icofont icofont-brand-symbian' => 'icofont-brand-symbian',
			'icofont icofont-brand-t-mobile' => 'icofont-brand-t-mobile',
			'icofont icofont-brand-tango' => 'icofont-brand-tango',
			'icofont icofont-brand-target' => 'icofont-brand-target',
			'icofont icofont-brand-tata-indicom' => 'icofont-brand-tata-indicom',
			'icofont icofont-brand-techcrunch' => 'icofont-brand-techcrunch',
			'icofont icofont-brand-telenor' => 'icofont-brand-telenor',
			'icofont icofont-brand-teliasonera' => 'icofont-brand-teliasonera',
			'icofont icofont-brand-tesla' => 'icofont-brand-tesla',
			'icofont icofont-brand-the-verge' => 'icofont-brand-the-verge',
			'icofont icofont-brand-thenextweb' => 'icofont-brand-thenextweb',
			'icofont icofont-brand-toshiba' => 'icofont-brand-toshiba',
			'icofont icofont-brand-toyota' => 'icofont-brand-toyota',
			'icofont icofont-brand-tribenet' => 'icofont-brand-tribenet',
			'icofont icofont-brand-ubuntu' => 'icofont-brand-ubuntu',
			'icofont icofont-brand-unilever' => 'icofont-brand-unilever',
			'icofont icofont-brand-vaio' => 'icofont-brand-vaio',
			'icofont icofont-brand-verizon' => 'icofont-brand-verizon',
			'icofont icofont-brand-viber' => 'icofont-brand-viber',
			'icofont icofont-brand-vodafone' => 'icofont-brand-vodafone',
			'icofont icofont-brand-volkswagen' => 'icofont-brand-volkswagen',
			'icofont icofont-brand-walmart' => 'icofont-brand-walmart',
			'icofont icofont-brand-warnerbros' => 'icofont-brand-warnerbros',
			'icofont icofont-brand-whatsapp' => 'icofont-brand-whatsapp',
			'icofont icofont-brand-wikipedia' => 'icofont-brand-wikipedia',
			'icofont icofont-brand-windows' => 'icofont-brand-windows',
			'icofont icofont-brand-wire' => 'icofont-brand-wire',
			'icofont icofont-brand-wordpress' => 'icofont-brand-wordpress',
			'icofont icofont-brand-xiaomi' => 'icofont-brand-xiaomi',
			'icofont icofont-brand-yahoobuzz' => 'icofont-brand-yahoobuzz',
			'icofont icofont-brand-yamaha' => 'icofont-brand-yamaha',
			'icofont icofont-brand-youtube' => 'icofont-brand-youtube',
			'icofont icofont-brand-zain' => 'icofont-brand-zain',
			'icofont icofont-bank-alt' => 'icofont-bank-alt',
			'icofont icofont-bank' => 'icofont-bank',
			'icofont icofont-barcode' => 'icofont-barcode',
			'icofont icofont-bill-alt' => 'icofont-bill-alt',
			'icofont icofont-billboard' => 'icofont-billboard',
			'icofont icofont-briefcase-1' => 'icofont-briefcase-1',
			'icofont icofont-briefcase-2' => 'icofont-briefcase-2',
			'icofont icofont-businessman' => 'icofont-businessman',
			'icofont icofont-businesswoman' => 'icofont-businesswoman',
			'icofont icofont-chair' => 'icofont-chair',
			'icofont icofont-coins' => 'icofont-coins',
			'icofont icofont-company' => 'icofont-company',
			'icofont icofont-contact-add' => 'icofont-contact-add',
			'icofont icofont-files-stack' => 'icofont-files-stack',
			'icofont icofont-handshake-deal' => 'icofont-handshake-deal',
			'icofont icofont-id-card' => 'icofont-id-card',
			'icofont icofont-meeting-add' => 'icofont-meeting-add',
			'icofont icofont-money-bag' => 'icofont-money-bag',
			'icofont icofont-pie-chart' => 'icofont-pie-chart',
			'icofont icofont-presentation-alt' => 'icofont-presentation-alt',
			'icofont icofont-presentation' => 'icofont-presentation',
			'icofont icofont-stamp' => 'icofont-stamp',
			'icofont icofont-stock-mobile' => 'icofont-stock-mobile',
			'icofont icofont-chart-arrows-axis' => 'icofont-chart-arrows-axis',
			'icofont icofont-chart-bar-graph' => 'icofont-chart-bar-graph',
			'icofont icofont-chart-flow-1' => 'icofont-chart-flow-1',
			'icofont icofont-chart-flow-2' => 'icofont-chart-flow-2',
			'icofont icofont-chart-flow' => 'icofont-chart-flow',
			'icofont icofont-chart-growth' => 'icofont-chart-growth',
			'icofont icofont-chart-histogram-alt' => 'icofont-chart-histogram-alt',
			'icofont icofont-chart-histogram' => 'icofont-chart-histogram',
			'icofont icofont-chart-line-alt' => 'icofont-chart-line-alt',
			'icofont icofont-chart-line' => 'icofont-chart-line',
			'icofont icofont-chart-pie-alt' => 'icofont-chart-pie-alt',
			'icofont icofont-chart-pie' => 'icofont-chart-pie',
			'icofont icofont-chart-radar-graph' => 'icofont-chart-radar-graph',
			'icofont icofont-architecture-alt' => 'icofont-architecture-alt',
			'icofont icofont-architecture' => 'icofont-architecture',
			'icofont icofont-barricade' => 'icofont-barricade',
			'icofont icofont-bolt' => 'icofont-bolt',
			'icofont icofont-bricks' => 'icofont-bricks',
			'icofont icofont-building-alt' => 'icofont-building-alt',
			'icofont icofont-bull-dozer' => 'icofont-bull-dozer',
			'icofont icofont-calculations' => 'icofont-calculations',
			'icofont icofont-cement-mix' => 'icofont-cement-mix',
			'icofont icofont-cement-mixer' => 'icofont-cement-mixer',
			'icofont icofont-concrete-mixer' => 'icofont-concrete-mixer',
			'icofont icofont-danger-zone' => 'icofont-danger-zone',
			'icofont icofont-drill' => 'icofont-drill',
			'icofont icofont-eco-energy' => 'icofont-eco-energy',
			'icofont icofont-eco-environmen' => 'icofont-eco-environmen',
			'icofont icofont-energy-air' => 'icofont-energy-air',
			'icofont icofont-energy-oil' => 'icofont-energy-oil',
			'icofont icofont-energy-savings' => 'icofont-energy-savings',
			'icofont icofont-energy-solar' => 'icofont-energy-solar',
			'icofont icofont-energy-water' => 'icofont-energy-water',
			'icofont icofont-engineer' => 'icofont-engineer',
			'icofont icofont-fire-extinguisher-alt' => 'icofont-fire-extinguisher-alt',
			'icofont icofont-fire-extinguisher' => 'icofont-fire-extinguisher',
			'icofont icofont-fix-tools' => 'icofont-fix-tools',
			'icofont icofont-fork-lift' => 'icofont-fork-lift',
			'icofont icofont-glue-oil' => 'icofont-glue-oil',
			'icofont icofont-hammer-alt' => 'icofont-hammer-alt',
			'icofont icofont-hammer' => 'icofont-hammer',
			'icofont icofont-help-robot' => 'icofont-help-robot',
			'icofont icofont-industries-1' => 'icofont-industries-1',
			'icofont icofont-industries-2' => 'icofont-industries-2',
			'icofont icofont-industries-3' => 'icofont-industries-3',
			'icofont icofont-industries-4' => 'icofont-industries-4',
			'icofont icofont-industries-5' => 'icofont-industries-5',
			'icofont icofont-industries' => 'icofont-industries',
			'icofont icofont-labour' => 'icofont-labour',
			'icofont icofont-mining' => 'icofont-mining',
			'icofont icofont-paint-brush' => 'icofont-paint-brush',
			'icofont icofont-pollution' => 'icofont-pollution',
			'icofont icofont-power-zone' => 'icofont-power-zone',
			'icofont icofont-radio-active' => 'icofont-radio-active',
			'icofont icofont-recycle-alt' => 'icofont-recycle-alt',
			'icofont icofont-recycling-man' => 'icofont-recycling-man',
			'icofont icofont-safety-hat-light' => 'icofont-safety-hat-light',
			'icofont icofont-safety-hat' => 'icofont-safety-hat',
			'icofont icofont-saw' => 'icofont-saw',
			'icofont icofont-screw-driver' => 'icofont-screw-driver',
			'icofont icofont-tools-1' => 'icofont-tools-1',
			'icofont icofont-tools-bag' => 'icofont-tools-bag',
			'icofont icofont-tow-truck' => 'icofont-tow-truck',
			'icofont icofont-trolley' => 'icofont-trolley',
			'icofont icofont-trowel' => 'icofont-trowel',
			'icofont icofont-under-construction-alt' => 'icofont-under-construction-alt',
			'icofont icofont-under-construction' => 'icofont-under-construction',
			'icofont icofont-vehicle-cement' => 'icofont-vehicle-cement',
			'icofont icofont-vehicle-crane' => 'icofont-vehicle-crane',
			'icofont icofont-vehicle-delivery-van' => 'icofont-vehicle-delivery-van',
			'icofont icofont-vehicle-dozer' => 'icofont-vehicle-dozer',
			'icofont icofont-vehicle-excavator' => 'icofont-vehicle-excavator',
			'icofont icofont-vehicle-trucktor' => 'icofont-vehicle-trucktor',
			'icofont icofont-vehicle-wrecking' => 'icofont-vehicle-wrecking',
			'icofont icofont-worker' => 'icofont-worker',
			'icofont icofont-workers-group' => 'icofont-workers-group',
			'icofont icofont-wrench' => 'icofont-wrench',
			'icofont icofont-afghani-false' => 'icofont-afghani-false',
			'icofont icofont-afghani-minus' => 'icofont-afghani-minus',
			'icofont icofont-afghani-plus' => 'icofont-afghani-plus',
			'icofont icofont-afghani-true' => 'icofont-afghani-true',
			'icofont icofont-afghani' => 'icofont-afghani',
			'icofont icofont-baht-false' => 'icofont-baht-false',
			'icofont icofont-baht-minus' => 'icofont-baht-minus',
			'icofont icofont-baht-plus' => 'icofont-baht-plus',
			'icofont icofont-baht-true' => 'icofont-baht-true',
			'icofont icofont-baht' => 'icofont-baht',
			'icofont icofont-bitcoin-false' => 'icofont-bitcoin-false',
			'icofont icofont-bitcoin-minus' => 'icofont-bitcoin-minus',
			'icofont icofont-bitcoin-plus' => 'icofont-bitcoin-plus',
			'icofont icofont-bitcoin-true' => 'icofont-bitcoin-true',
			'icofont icofont-bitcoin' => 'icofont-bitcoin',
			'icofont icofont-dollar-flase' => 'icofont-dollar-flase',
			'icofont icofont-dollar-minus' => 'icofont-dollar-minus',
			'icofont icofont-dollar-plus' => 'icofont-dollar-plus',
			'icofont icofont-dollar-true' => 'icofont-dollar-true',
			'icofont icofont-dollar' => 'icofont-dollar',
			'icofont icofont-dong-false' => 'icofont-dong-false',
			'icofont icofont-dong-minus' => 'icofont-dong-minus',
			'icofont icofont-dong-plus' => 'icofont-dong-plus',
			'icofont icofont-dong-true' => 'icofont-dong-true',
			'icofont icofont-dong' => 'icofont-dong',
			'icofont icofont-euro-false' => 'icofont-euro-false',
			'icofont icofont-euro-minus' => 'icofont-euro-minus',
			'icofont icofont-euro-plus' => 'icofont-euro-plus',
			'icofont icofont-euro-true' => 'icofont-euro-true',
			'icofont icofont-euro' => 'icofont-euro',
			'icofont icofont-frank-false' => 'icofont-frank-false',
			'icofont icofont-frank-minus' => 'icofont-frank-minus',
			'icofont icofont-frank-plus' => 'icofont-frank-plus',
			'icofont icofont-frank-true' => 'icofont-frank-true',
			'icofont icofont-frank' => 'icofont-frank',
			'icofont icofont-hryvnia-false' => 'icofont-hryvnia-false',
			'icofont icofont-hryvnia-minus' => 'icofont-hryvnia-minus',
			'icofont icofont-hryvnia-plus' => 'icofont-hryvnia-plus',
			'icofont icofont-hryvnia-true' => 'icofont-hryvnia-true',
			'icofont icofont-hryvnia' => 'icofont-hryvnia',
			'icofont icofont-lira-false' => 'icofont-lira-false',
			'icofont icofont-lira-minus' => 'icofont-lira-minus',
			'icofont icofont-lira-plus' => 'icofont-lira-plus',
			'icofont icofont-lira-true' => 'icofont-lira-true',
			'icofont icofont-lira' => 'icofont-lira',
			'icofont icofont-peseta-false' => 'icofont-peseta-false',
			'icofont icofont-peseta-minus' => 'icofont-peseta-minus',
			'icofont icofont-peseta-plus' => 'icofont-peseta-plus',
			'icofont icofont-peseta-true' => 'icofont-peseta-true',
			'icofont icofont-peseta' => 'icofont-peseta',
			'icofont icofont-peso-false' => 'icofont-peso-false',
			'icofont icofont-peso-minus' => 'icofont-peso-minus',
			'icofont icofont-peso-plus' => 'icofont-peso-plus',
			'icofont icofont-peso-true' => 'icofont-peso-true',
			'icofont icofont-peso' => 'icofont-peso',
			'icofont icofont-pound-false' => 'icofont-pound-false',
			'icofont icofont-pound-minus' => 'icofont-pound-minus',
			'icofont icofont-pound-plus' => 'icofont-pound-plus',
			'icofont icofont-pound-true' => 'icofont-pound-true',
			'icofont icofont-pound' => 'icofont-pound',
			'icofont icofont-renminbi-false' => 'icofont-renminbi-false',
			'icofont icofont-renminbi-minus' => 'icofont-renminbi-minus',
			'icofont icofont-renminbi-plus' => 'icofont-renminbi-plus',
			'icofont icofont-renminbi-true' => 'icofont-renminbi-true',
			'icofont icofont-renminbi' => 'icofont-renminbi',
			'icofont icofont-riyal-false' => 'icofont-riyal-false',
			'icofont icofont-riyal-minus' => 'icofont-riyal-minus',
			'icofont icofont-riyal-plus' => 'icofont-riyal-plus',
			'icofont icofont-riyal-true' => 'icofont-riyal-true',
			'icofont icofont-riyal' => 'icofont-riyal',
			'icofont icofont-rouble-false' => 'icofont-rouble-false',
			'icofont icofont-rouble-minus' => 'icofont-rouble-minus',
			'icofont icofont-rouble-plus' => 'icofont-rouble-plus',
			'icofont icofont-rouble-true' => 'icofont-rouble-true',
			'icofont icofont-rouble' => 'icofont-rouble',
			'icofont icofont-rupee-false' => 'icofont-rupee-false',
			'icofont icofont-rupee-minus' => 'icofont-rupee-minus',
			'icofont icofont-rupee-plus' => 'icofont-rupee-plus',
			'icofont icofont-rupee-true' => 'icofont-rupee-true',
			'icofont icofont-rupee' => 'icofont-rupee',
			'icofont icofont-taka-false' => 'icofont-taka-false',
			'icofont icofont-taka-minus' => 'icofont-taka-minus',
			'icofont icofont-taka-plus' => 'icofont-taka-plus',
			'icofont icofont-taka-true' => 'icofont-taka-true',
			'icofont icofont-taka' => 'icofont-taka',
			'icofont icofont-turkish-lira-false' => 'icofont-turkish-lira-false',
			'icofont icofont-turkish-lira-minus' => 'icofont-turkish-lira-minus',
			'icofont icofont-turkish-lira-plus' => 'icofont-turkish-lira-plus',
			'icofont icofont-turkish-lira-true' => 'icofont-turkish-lira-true',
			'icofont icofont-turkish-lira' => 'icofont-turkish-lira',
			'icofont icofont-won-false' => 'icofont-won-false',
			'icofont icofont-won-minus' => 'icofont-won-minus',
			'icofont icofont-won-plus' => 'icofont-won-plus',
			'icofont icofont-won-true' => 'icofont-won-true',
			'icofont icofont-won' => 'icofont-won',
			'icofont icofont-yen-false' => 'icofont-yen-false',
			'icofont icofont-yen-minus' => 'icofont-yen-minus',
			'icofont icofont-yen-plus' => 'icofont-yen-plus',
			'icofont icofont-yen-true' => 'icofont-yen-true',
			'icofont icofont-yen' => 'icofont-yen',
			'icofont icofont-android-nexus' => 'icofont-android-nexus',
			'icofont icofont-android-tablet' => 'icofont-android-tablet',
			'icofont icofont-apple-watch' => 'icofont-apple-watch',
			'icofont icofont-drawing-tablet' => 'icofont-drawing-tablet',
			'icofont icofont-earphone' => 'icofont-earphone',
			'icofont icofont-flash-drive' => 'icofont-flash-drive',
			'icofont icofont-game-console' => 'icofont-game-console',
			'icofont icofont-game-controller' => 'icofont-game-controller',
			'icofont icofont-game-pad' => 'icofont-game-pad',
			'icofont icofont-game' => 'icofont-game',
			'icofont icofont-headphone-alt-1' => 'icofont-headphone-alt-1',
			'icofont icofont-headphone-alt-2' => 'icofont-headphone-alt-2',
			'icofont icofont-headphone-alt-3' => 'icofont-headphone-alt-3',
			'icofont icofont-headphone-alt' => 'icofont-headphone-alt',
			'icofont icofont-headphone' => 'icofont-headphone',
			'icofont icofont-htc-one' => 'icofont-htc-one',
			'icofont icofont-imac' => 'icofont-imac',
			'icofont icofont-ipad' => 'icofont-ipad',
			'icofont icofont-iphone' => 'icofont-iphone',
			'icofont icofont-ipod-nano' => 'icofont-ipod-nano',
			'icofont icofont-ipod-touch' => 'icofont-ipod-touch',
			'icofont icofont-keyboard-alt' => 'icofont-keyboard-alt',
			'icofont icofont-keyboard-wireless' => 'icofont-keyboard-wireless',
			'icofont icofont-keyboard' => 'icofont-keyboard',
			'icofont icofont-laptop-alt' => 'icofont-laptop-alt',
			'icofont icofont-laptop' => 'icofont-laptop',
			'icofont icofont-macbook' => 'icofont-macbook',
			'icofont icofont-magic-mouse' => 'icofont-magic-mouse',
			'icofont icofont-micro-chip' => 'icofont-micro-chip',
			'icofont icofont-microphone-alt' => 'icofont-microphone-alt',
			'icofont icofont-microphone' => 'icofont-microphone',
			'icofont icofont-monitor' => 'icofont-monitor',
			'icofont icofont-mouse' => 'icofont-mouse',
			'icofont icofont-mp3-player' => 'icofont-mp3-player',
			'icofont icofont-nintendo' => 'icofont-nintendo',
			'icofont icofont-playstation-alt' => 'icofont-playstation-alt',
			'icofont icofont-psvita' => 'icofont-psvita',
			'icofont icofont-radio-mic' => 'icofont-radio-mic',
			'icofont icofont-radio' => 'icofont-radio',
			'icofont icofont-refrigerator' => 'icofont-refrigerator',
			'icofont icofont-samsung-galaxy' => 'icofont-samsung-galaxy',
			'icofont icofont-surface-tablet' => 'icofont-surface-tablet',
			'icofont icofont-ui-head-phone' => 'icofont-ui-head-phone',
			'icofont icofont-ui-keyboard' => 'icofont-ui-keyboard',
			'icofont icofont-washing-machine' => 'icofont-washing-machine',
			'icofont icofont-wifi-router' => 'icofont-wifi-router',
			'icofont icofont-wii-u' => 'icofont-wii-u',
			'icofont icofont-windows-lumia' => 'icofont-windows-lumia',
			'icofont icofont-wireless-mouse' => 'icofont-wireless-mouse',
			'icofont icofont-xbox-360' => 'icofont-xbox-360',
			'icofont icofont-arrow-down' => 'icofont-arrow-down',
			'icofont icofont-arrow-left' => 'icofont-arrow-left',
			'icofont icofont-arrow-right' => 'icofont-arrow-right',
			'icofont icofont-arrow-up' => 'icofont-arrow-up',
			'icofont icofont-block-down' => 'icofont-block-down',
			'icofont icofont-block-left' => 'icofont-block-left',
			'icofont icofont-block-right' => 'icofont-block-right',
			'icofont icofont-block-up' => 'icofont-block-up',
			'icofont icofont-bubble-down' => 'icofont-bubble-down',
			'icofont icofont-bubble-left' => 'icofont-bubble-left',
			'icofont icofont-bubble-right' => 'icofont-bubble-right',
			'icofont icofont-bubble-up' => 'icofont-bubble-up',
			'icofont icofont-caret-down' => 'icofont-caret-down',
			'icofont icofont-caret-left' => 'icofont-caret-left',
			'icofont icofont-caret-right' => 'icofont-caret-right',
			'icofont icofont-caret-up' => 'icofont-caret-up',
			'icofont icofont-circled-down' => 'icofont-circled-down',
			'icofont icofont-circled-left' => 'icofont-circled-left',
			'icofont icofont-circled-right' => 'icofont-circled-right',
			'icofont icofont-circled-up' => 'icofont-circled-up',
			'icofont icofont-collapse' => 'icofont-collapse',
			'icofont icofont-cursor-drag' => 'icofont-cursor-drag',
			'icofont icofont-curved-double-left' => 'icofont-curved-double-left',
			'icofont icofont-curved-double-right' => 'icofont-curved-double-right',
			'icofont icofont-curved-down' => 'icofont-curved-down',
			'icofont icofont-curved-left' => 'icofont-curved-left',
			'icofont icofont-curved-right' => 'icofont-curved-right',
			'icofont icofont-curved-up' => 'icofont-curved-up',
			'icofont icofont-dotted-down' => 'icofont-dotted-down',
			'icofont icofont-dotted-left' => 'icofont-dotted-left',
			'icofont icofont-dotted-right' => 'icofont-dotted-right',
			'icofont icofont-dotted-up' => 'icofont-dotted-up',
			'icofont icofont-double-left' => 'icofont-double-left',
			'icofont icofont-double-right' => 'icofont-double-right',
			'icofont icofont-expand-alt' => 'icofont-expand-alt',
			'icofont icofont-hand-down' => 'icofont-hand-down',
			'icofont icofont-hand-drag' => 'icofont-hand-drag',
			'icofont icofont-hand-drag1' => 'icofont-hand-drag1',
			'icofont icofont-hand-drag2' => 'icofont-hand-drag2',
			'icofont icofont-hand-drawn-alt-down' => 'icofont-hand-drawn-alt-down',
			'icofont icofont-hand-drawn-alt-left' => 'icofont-hand-drawn-alt-left',
			'icofont icofont-hand-drawn-alt-right' => 'icofont-hand-drawn-alt-right',
			'icofont icofont-hand-drawn-alt-up' => 'icofont-hand-drawn-alt-up',
			'icofont icofont-hand-drawn-down' => 'icofont-hand-drawn-down',
			'icofont icofont-hand-drawn-left' => 'icofont-hand-drawn-left',
			'icofont icofont-hand-drawn-right' => 'icofont-hand-drawn-right',
			'icofont icofont-hand-drawn-up' => 'icofont-hand-drawn-up',
			'icofont icofont-hand-grippers' => 'icofont-hand-grippers',
			'icofont icofont-hand-left' => 'icofont-hand-left',
			'icofont icofont-hand-right' => 'icofont-hand-right',
			'icofont icofont-hand-up' => 'icofont-hand-up',
			'icofont icofont-line-block-down' => 'icofont-line-block-down',
			'icofont icofont-line-block-left' => 'icofont-line-block-left',
			'icofont icofont-line-block-right' => 'icofont-line-block-right',
			'icofont icofont-line-block-up' => 'icofont-line-block-up',
			'icofont icofont-long-arrow-down' => 'icofont-long-arrow-down',
			'icofont icofont-long-arrow-left' => 'icofont-long-arrow-left',
			'icofont icofont-long-arrow-right' => 'icofont-long-arrow-right',
			'icofont icofont-long-arrow-up' => 'icofont-long-arrow-up',
			'icofont icofont-rounded-collapse' => 'icofont-rounded-collapse',
			'icofont icofont-rounded-double-left' => 'icofont-rounded-double-left',
			'icofont icofont-rounded-double-right' => 'icofont-rounded-double-right',
			'icofont icofont-rounded-down' => 'icofont-rounded-down',
			'icofont icofont-rounded-expand' => 'icofont-rounded-expand',
			'icofont icofont-rounded-left-down' => 'icofont-rounded-left-down',
			'icofont icofont-rounded-left-up' => 'icofont-rounded-left-up',
			'icofont icofont-rounded-left' => 'icofont-rounded-left',
			'icofont icofont-rounded-right-down' => 'icofont-rounded-right-down',
			'icofont icofont-rounded-right-up' => 'icofont-rounded-right-up',
			'icofont icofont-rounded-right' => 'icofont-rounded-right',
			'icofont icofont-rounded-up' => 'icofont-rounded-up',
			'icofont icofont-scroll-bubble-down' => 'icofont-scroll-bubble-down',
			'icofont icofont-scroll-bubble-left' => 'icofont-scroll-bubble-left',
			'icofont icofont-scroll-bubble-right' => 'icofont-scroll-bubble-right',
			'icofont icofont-scroll-bubble-up' => 'icofont-scroll-bubble-up',
			'icofont icofont-scroll-double-down' => 'icofont-scroll-double-down',
			'icofont icofont-scroll-double-left' => 'icofont-scroll-double-left',
			'icofont icofont-scroll-double-right' => 'icofont-scroll-double-right',
			'icofont icofont-scroll-double-up' => 'icofont-scroll-double-up',
			'icofont icofont-scroll-down' => 'icofont-scroll-down',
			'icofont icofont-scroll-left' => 'icofont-scroll-left',
			'icofont icofont-scroll-long-down' => 'icofont-scroll-long-down',
			'icofont icofont-scroll-long-left' => 'icofont-scroll-long-left',
			'icofont icofont-scroll-long-right' => 'icofont-scroll-long-right',
			'icofont icofont-scroll-long-up' => 'icofont-scroll-long-up',
			'icofont icofont-scroll-right' => 'icofont-scroll-right',
			'icofont icofont-scroll-up' => 'icofont-scroll-up',
			'icofont icofont-simple-down' => 'icofont-simple-down',
			'icofont icofont-simple-left-down' => 'icofont-simple-left-down',
			'icofont icofont-simple-left-up' => 'icofont-simple-left-up',
			'icofont icofont-simple-left' => 'icofont-simple-left',
			'icofont icofont-simple-right-down' => 'icofont-simple-right-down',
			'icofont icofont-simple-right-up' => 'icofont-simple-right-up',
			'icofont icofont-simple-right' => 'icofont-simple-right',
			'icofont icofont-simple-up' => 'icofont-simple-up',
			'icofont icofont-square-down' => 'icofont-square-down',
			'icofont icofont-square-left' => 'icofont-square-left',
			'icofont icofont-square-right' => 'icofont-square-right',
			'icofont icofont-square-up' => 'icofont-square-up',
			'icofont icofont-stylish-down' => 'icofont-stylish-down',
			'icofont icofont-stylish-left' => 'icofont-stylish-left',
			'icofont icofont-stylish-right' => 'icofont-stylish-right',
			'icofont icofont-stylish-up' => 'icofont-stylish-up',
			'icofont icofont-swoosh-down' => 'icofont-swoosh-down',
			'icofont icofont-swoosh-left' => 'icofont-swoosh-left',
			'icofont icofont-swoosh-right' => 'icofont-swoosh-right',
			'icofont icofont-swoosh-up' => 'icofont-swoosh-up',
			'icofont icofont-thin-double-left' => 'icofont-thin-double-left',
			'icofont icofont-thin-double-right' => 'icofont-thin-double-right',
			'icofont icofont-thin-down' => 'icofont-thin-down',
			'icofont icofont-thin-left' => 'icofont-thin-left',
			'icofont icofont-thin-right' => 'icofont-thin-right',
			'icofont icofont-thin-up' => 'icofont-thin-up',
			'icofont icofont-abc' => 'icofont-abc',
			'icofont icofont-atom' => 'icofont-atom',
			'icofont icofont-award' => 'icofont-award',
			'icofont icofont-bell-alt' => 'icofont-bell-alt',
			'icofont icofont-black-board' => 'icofont-black-board',
			'icofont icofont-book-alt' => 'icofont-book-alt',
			'icofont icofont-book' => 'icofont-book',
			'icofont icofont-brainstorming' => 'icofont-brainstorming',
			'icofont icofont-certificate-alt-1' => 'icofont-certificate-alt-1',
			'icofont icofont-certificate-alt-2' => 'icofont-certificate-alt-2',
			'icofont icofont-certificate' => 'icofont-certificate',
			'icofont icofont-education' => 'icofont-education',
			'icofont icofont-electron' => 'icofont-electron',
			'icofont icofont-fountain-pen' => 'icofont-fountain-pen',
			'icofont icofont-globe-alt' => 'icofont-globe-alt',
			'icofont icofont-graduate-alt' => 'icofont-graduate-alt',
			'icofont icofont-graduate' => 'icofont-graduate',
			'icofont icofont-group-students' => 'icofont-group-students',
			'icofont icofont-hat-alt' => 'icofont-hat-alt',
			'icofont icofont-hat' => 'icofont-hat',
			'icofont icofont-instrument' => 'icofont-instrument',
			'icofont icofont-lamp-light' => 'icofont-lamp-light',
			'icofont icofont-medal' => 'icofont-medal',
			'icofont icofont-microscope-alt' => 'icofont-microscope-alt',
			'icofont icofont-microscope' => 'icofont-microscope',
			'icofont icofont-paper' => 'icofont-paper',
			'icofont icofont-pen-alt-4' => 'icofont-pen-alt-4',
			'icofont icofont-pen-nib' => 'icofont-pen-nib',
			'icofont icofont-pencil-alt-5' => 'icofont-pencil-alt-5',
			'icofont icofont-quill-pen' => 'icofont-quill-pen',
			'icofont icofont-read-book-alt' => 'icofont-read-book-alt',
			'icofont icofont-read-book' => 'icofont-read-book',
			'icofont icofont-school-bag' => 'icofont-school-bag',
			'icofont icofont-school-bus' => 'icofont-school-bus',
			'icofont icofont-student-alt' => 'icofont-student-alt',
			'icofont icofont-student' => 'icofont-student',
			'icofont icofont-teacher' => 'icofont-teacher',
			'icofont icofont-test-bulb' => 'icofont-test-bulb',
			'icofont icofont-test-tube-alt' => 'icofont-test-tube-alt',
			'icofont icofont-university' => 'icofont-university',
			'icofont icofont-angry' => 'icofont-angry',
			'icofont icofont-astonished' => 'icofont-astonished',
			'icofont icofont-confounded' => 'icofont-confounded',
			'icofont icofont-confused' => 'icofont-confused',
			'icofont icofont-crying' => 'icofont-crying',
			'icofont icofont-dizzy' => 'icofont-dizzy',
			'icofont icofont-expressionless' => 'icofont-expressionless',
			'icofont icofont-heart-eyes' => 'icofont-heart-eyes',
			'icofont icofont-laughing' => 'icofont-laughing',
			'icofont icofont-nerd-smile' => 'icofont-nerd-smile',
			'icofont icofont-open-mouth' => 'icofont-open-mouth',
			'icofont icofont-rage' => 'icofont-rage',
			'icofont icofont-rolling-eyes' => 'icofont-rolling-eyes',
			'icofont icofont-sad' => 'icofont-sad',
			'icofont icofont-simple-smile' => 'icofont-simple-smile',
			'icofont icofont-slightly-smile' => 'icofont-slightly-smile',
			'icofont icofont-smirk' => 'icofont-smirk',
			'icofont icofont-stuck-out-tongue' => 'icofont-stuck-out-tongue',
			'icofont icofont-wink-smile' => 'icofont-wink-smile',
			'icofont icofont-worried' => 'icofont-worried',
			'icofont icofont-file-alt' => 'icofont-file-alt',
			'icofont icofont-file-audio' => 'icofont-file-audio',
			'icofont icofont-file-avi-mp4' => 'icofont-file-avi-mp4',
			'icofont icofont-file-bmp' => 'icofont-file-bmp',
			'icofont icofont-file-code' => 'icofont-file-code',
			'icofont icofont-file-css' => 'icofont-file-css',
			'icofont icofont-file-document' => 'icofont-file-document',
			'icofont icofont-file-eps' => 'icofont-file-eps',
			'icofont icofont-file-excel' => 'icofont-file-excel',
			'icofont icofont-file-exe' => 'icofont-file-exe',
			'icofont icofont-file-file' => 'icofont-file-file',
			'icofont icofont-file-flv' => 'icofont-file-flv',
			'icofont icofont-file-gif' => 'icofont-file-gif',
			'icofont icofont-file-html5' => 'icofont-file-html5',
			'icofont icofont-file-image' => 'icofont-file-image',
			'icofont icofont-file-iso' => 'icofont-file-iso',
			'icofont icofont-file-java' => 'icofont-file-java',
			'icofont icofont-file-javascript' => 'icofont-file-javascript',
			'icofont icofont-file-jpg' => 'icofont-file-jpg',
			'icofont icofont-file-midi' => 'icofont-file-midi',
			'icofont icofont-file-mov' => 'icofont-file-mov',
			'icofont icofont-file-mp3' => 'icofont-file-mp3',
			'icofont icofont-file-pdf' => 'icofont-file-pdf',
			'icofont icofont-file-php' => 'icofont-file-php',
			'icofont icofont-file-png' => 'icofont-file-png',
			'icofont icofont-file-powerpoint' => 'icofont-file-powerpoint',
			'icofont icofont-file-presentation' => 'icofont-file-presentation',
			'icofont icofont-file-psb' => 'icofont-file-psb',
			'icofont icofont-file-psd' => 'icofont-file-psd',
			'icofont icofont-file-python' => 'icofont-file-python',
			'icofont icofont-file-ruby' => 'icofont-file-ruby',
			'icofont icofont-file-spreadsheet' => 'icofont-file-spreadsheet',
			'icofont icofont-file-sql' => 'icofont-file-sql',
			'icofont icofont-file-svg' => 'icofont-file-svg',
			'icofont icofont-file-text' => 'icofont-file-text',
			'icofont icofont-file-tiff' => 'icofont-file-tiff',
			'icofont icofont-file-video' => 'icofont-file-video',
			'icofont icofont-file-wave' => 'icofont-file-wave',
			'icofont icofont-file-wmv' => 'icofont-file-wmv',
			'icofont icofont-file-word' => 'icofont-file-word',
			'icofont icofont-file-zip' => 'icofont-file-zip',
			'icofont icofont-cycling-alt' => 'icofont-cycling-alt',
			'icofont icofont-cycling' => 'icofont-cycling',
			'icofont icofont-dumbbell' => 'icofont-dumbbell',
			'icofont icofont-dumbbells' => 'icofont-dumbbells',
			'icofont icofont-gym-alt-1' => 'icofont-gym-alt-1',
			'icofont icofont-gym-alt-2' => 'icofont-gym-alt-2',
			'icofont icofont-gym-alt-3' => 'icofont-gym-alt-3',
			'icofont icofont-gym' => 'icofont-gym',
			'icofont icofont-muscle-weight' => 'icofont-muscle-weight',
			'icofont icofont-muscle' => 'icofont-muscle',
			'icofont icofont-apple' => 'icofont-apple',
			'icofont icofont-arabian-coffee' => 'icofont-arabian-coffee',
			'icofont icofont-artichoke' => 'icofont-artichoke',
			'icofont icofont-asparagus' => 'icofont-asparagus',
			'icofont icofont-avocado' => 'icofont-avocado',
			'icofont icofont-baby-food' => 'icofont-baby-food',
			'icofont icofont-banana' => 'icofont-banana',
			'icofont icofont-bbq' => 'icofont-bbq',
			'icofont icofont-beans' => 'icofont-beans',
			'icofont icofont-beer' => 'icofont-beer',
			'icofont icofont-bell-pepper-capsicum' => 'icofont-bell-pepper-capsicum',
			'icofont icofont-birthday-cake' => 'icofont-birthday-cake',
			'icofont icofont-bread' => 'icofont-bread',
			'icofont icofont-broccoli' => 'icofont-broccoli',
			'icofont icofont-burger' => 'icofont-burger',
			'icofont icofont-cabbage' => 'icofont-cabbage',
			'icofont icofont-carrot' => 'icofont-carrot',
			'icofont icofont-cauli-flower' => 'icofont-cauli-flower',
			'icofont icofont-cheese' => 'icofont-cheese',
			'icofont icofont-chef' => 'icofont-chef',
			'icofont icofont-cherry' => 'icofont-cherry',
			'icofont icofont-chicken-fry' => 'icofont-chicken-fry',
			'icofont icofont-chicken' => 'icofont-chicken',
			'icofont icofont-cocktail' => 'icofont-cocktail',
			'icofont icofont-coconut-water' => 'icofont-coconut-water',
			'icofont icofont-coconut' => 'icofont-coconut',
			'icofont icofont-coffee-alt' => 'icofont-coffee-alt',
			'icofont icofont-coffee-cup' => 'icofont-coffee-cup',
			'icofont icofont-coffee-mug' => 'icofont-coffee-mug',
			'icofont icofont-coffee-pot' => 'icofont-coffee-pot',
			'icofont icofont-cola' => 'icofont-cola',
			'icofont icofont-corn' => 'icofont-corn',
			'icofont icofont-croissant' => 'icofont-croissant',
			'icofont icofont-crop-plant' => 'icofont-crop-plant',
			'icofont icofont-cucumber' => 'icofont-cucumber',
			'icofont icofont-culinary' => 'icofont-culinary',
			'icofont icofont-cup-cake' => 'icofont-cup-cake',
			'icofont icofont-dining-table' => 'icofont-dining-table',
			'icofont icofont-donut' => 'icofont-donut',
			'icofont icofont-egg-plant' => 'icofont-egg-plant',
			'icofont icofont-egg-poached' => 'icofont-egg-poached',
			'icofont icofont-farmer-alt' => 'icofont-farmer-alt',
			'icofont icofont-farmer' => 'icofont-farmer',
			'icofont icofont-fast-food' => 'icofont-fast-food',
			'icofont icofont-food-basket' => 'icofont-food-basket',
			'icofont icofont-food-cart' => 'icofont-food-cart',
			'icofont icofont-fork-and-knife' => 'icofont-fork-and-knife',
			'icofont icofont-french-fries' => 'icofont-french-fries',
			'icofont icofont-fruits' => 'icofont-fruits',
			'icofont icofont-grapes' => 'icofont-grapes',
			'icofont icofont-honey' => 'icofont-honey',
			'icofont icofont-hot-dog' => 'icofont-hot-dog',
			'icofont icofont-ice-cream-alt' => 'icofont-ice-cream-alt',
			'icofont icofont-ice-cream' => 'icofont-ice-cream',
			'icofont icofont-juice' => 'icofont-juice',
			'icofont icofont-ketchup' => 'icofont-ketchup',
			'icofont icofont-kiwi' => 'icofont-kiwi',
			'icofont icofont-layered-cake' => 'icofont-layered-cake',
			'icofont icofont-lemon-alt' => 'icofont-lemon-alt',
			'icofont icofont-lemon' => 'icofont-lemon',
			'icofont icofont-lobster' => 'icofont-lobster',
			'icofont icofont-mango' => 'icofont-mango',
			'icofont icofont-milk' => 'icofont-milk',
			'icofont icofont-mushroom' => 'icofont-mushroom',
			'icofont icofont-noodles' => 'icofont-noodles',
			'icofont icofont-onion' => 'icofont-onion',
			'icofont icofont-orange' => 'icofont-orange',
			'icofont icofont-pear' => 'icofont-pear',
			'icofont icofont-peas' => 'icofont-peas',
			'icofont icofont-pepper' => 'icofont-pepper',
			'icofont icofont-pie-alt' => 'icofont-pie-alt',
			'icofont icofont-pie' => 'icofont-pie',
			'icofont icofont-pineapple' => 'icofont-pineapple',
			'icofont icofont-pizza-slice' => 'icofont-pizza-slice',
			'icofont icofont-pizza' => 'icofont-pizza',
			'icofont icofont-plant' => 'icofont-plant',
			'icofont icofont-popcorn' => 'icofont-popcorn',
			'icofont icofont-potato' => 'icofont-potato',
			'icofont icofont-pumpkin' => 'icofont-pumpkin',
			'icofont icofont-raddish' => 'icofont-raddish',
			'icofont icofont-restaurant-menu' => 'icofont-restaurant-menu',
			'icofont icofont-restaurant' => 'icofont-restaurant',
			'icofont icofont-salt-and-pepper' => 'icofont-salt-and-pepper',
			'icofont icofont-sandwich' => 'icofont-sandwich',
			'icofont icofont-sausage' => 'icofont-sausage',
			'icofont icofont-soft-drinks' => 'icofont-soft-drinks',
			'icofont icofont-soup-bowl' => 'icofont-soup-bowl',
			'icofont icofont-spoon-and-fork' => 'icofont-spoon-and-fork',
			'icofont icofont-steak' => 'icofont-steak',
			'icofont icofont-strawberry' => 'icofont-strawberry',
			'icofont icofont-sub-sandwich' => 'icofont-sub-sandwich',
			'icofont icofont-sushi' => 'icofont-sushi',
			'icofont icofont-taco' => 'icofont-taco',
			'icofont icofont-tea-pot' => 'icofont-tea-pot',
			'icofont icofont-tea' => 'icofont-tea',
			'icofont icofont-tomato' => 'icofont-tomato',
			'icofont icofont-watermelon' => 'icofont-watermelon',
			'icofont icofont-wheat' => 'icofont-wheat',
			'icofont icofont-baby-backpack' => 'icofont-baby-backpack',
			'icofont icofont-baby-cloth' => 'icofont-baby-cloth',
			'icofont icofont-baby-milk-bottle' => 'icofont-baby-milk-bottle',
			'icofont icofont-baby-trolley' => 'icofont-baby-trolley',
			'icofont icofont-baby' => 'icofont-baby',
			'icofont icofont-candy' => 'icofont-candy',
			'icofont icofont-holding-hands' => 'icofont-holding-hands',
			'icofont icofont-infant-nipple' => 'icofont-infant-nipple',
			'icofont icofont-kids-scooter' => 'icofont-kids-scooter',
			'icofont icofont-safety-pin' => 'icofont-safety-pin',
			'icofont icofont-teddy-bear' => 'icofont-teddy-bear',
			'icofont icofont-toy-ball' => 'icofont-toy-ball',
			'icofont icofont-toy-cat' => 'icofont-toy-cat',
			'icofont icofont-toy-duck' => 'icofont-toy-duck',
			'icofont icofont-toy-elephant' => 'icofont-toy-elephant',
			'icofont icofont-toy-hand' => 'icofont-toy-hand',
			'icofont icofont-toy-horse' => 'icofont-toy-horse',
			'icofont icofont-toy-lattu' => 'icofont-toy-lattu',
			'icofont icofont-toy-train' => 'icofont-toy-train',
			'icofont icofont-burglar' => 'icofont-burglar',
			'icofont icofont-cannon-firing' => 'icofont-cannon-firing',
			'icofont icofont-cc-camera' => 'icofont-cc-camera',
			'icofont icofont-cop-badge' => 'icofont-cop-badge',
			'icofont icofont-cop' => 'icofont-cop',
			'icofont icofont-court-hammer' => 'icofont-court-hammer',
			'icofont icofont-court' => 'icofont-court',
			'icofont icofont-finger-print' => 'icofont-finger-print',
			'icofont icofont-gavel' => 'icofont-gavel',
			'icofont icofont-handcuff-alt' => 'icofont-handcuff-alt',
			'icofont icofont-handcuff' => 'icofont-handcuff',
			'icofont icofont-investigation' => 'icofont-investigation',
			'icofont icofont-investigator' => 'icofont-investigator',
			'icofont icofont-jail' => 'icofont-jail',
			'icofont icofont-judge' => 'icofont-judge',
			'icofont icofont-law-alt-1' => 'icofont-law-alt-1',
			'icofont icofont-law-alt-2' => 'icofont-law-alt-2',
			'icofont icofont-law-alt-3' => 'icofont-law-alt-3',
			'icofont icofont-law-book' => 'icofont-law-book',
			'icofont icofont-law-document' => 'icofont-law-document',
			'icofont icofont-law-order' => 'icofont-law-order',
			'icofont icofont-law-protect' => 'icofont-law-protect',
			'icofont icofont-law-scales' => 'icofont-law-scales',
			'icofont icofont-law' => 'icofont-law',
			'icofont icofont-lawyer-alt-1' => 'icofont-lawyer-alt-1',
			'icofont icofont-lawyer-alt-2' => 'icofont-lawyer-alt-2',
			'icofont icofont-lawyer' => 'icofont-lawyer',
			'icofont icofont-legal' => 'icofont-legal',
			'icofont icofont-pistol' => 'icofont-pistol',
			'icofont icofont-police-badge' => 'icofont-police-badge',
			'icofont icofont-police-cap' => 'icofont-police-cap',
			'icofont icofont-police-car-alt-1' => 'icofont-police-car-alt-1',
			'icofont icofont-police-car-alt-2' => 'icofont-police-car-alt-2',
			'icofont icofont-police-car' => 'icofont-police-car',
			'icofont icofont-police-hat' => 'icofont-police-hat',
			'icofont icofont-police-van' => 'icofont-police-van',
			'icofont icofont-police' => 'icofont-police',
			'icofont icofont-thief-alt' => 'icofont-thief-alt',
			'icofont icofont-thief' => 'icofont-thief',
			'icofont icofont-abacus-alt' => 'icofont-abacus-alt',
			'icofont icofont-abacus' => 'icofont-abacus',
			'icofont icofont-angle-180' => 'icofont-angle-180',
			'icofont icofont-angle-45' => 'icofont-angle-45',
			'icofont icofont-angle-90' => 'icofont-angle-90',
			'icofont icofont-angle' => 'icofont-angle',
			'icofont icofont-calculator-alt-1' => 'icofont-calculator-alt-1',
			'icofont icofont-calculator-alt-2' => 'icofont-calculator-alt-2',
			'icofont icofont-calculator' => 'icofont-calculator',
			'icofont icofont-circle-ruler-alt' => 'icofont-circle-ruler-alt',
			'icofont icofont-circle-ruler' => 'icofont-circle-ruler',
			'icofont icofont-compass-alt-1' => 'icofont-compass-alt-1',
			'icofont icofont-compass-alt-2' => 'icofont-compass-alt-2',
			'icofont icofont-compass-alt-3' => 'icofont-compass-alt-3',
			'icofont icofont-compass-alt-4' => 'icofont-compass-alt-4',
			'icofont icofont-golden-ratio' => 'icofont-golden-ratio',
			'icofont icofont-marker-alt-1' => 'icofont-marker-alt-1',
			'icofont icofont-marker-alt-2' => 'icofont-marker-alt-2',
			'icofont icofont-marker-alt-3' => 'icofont-marker-alt-3',
			'icofont icofont-marker' => 'icofont-marker',
			'icofont icofont-math' => 'icofont-math',
			'icofont icofont-mathematical-alt-1' => 'icofont-mathematical-alt-1',
			'icofont icofont-mathematical-alt-2' => 'icofont-mathematical-alt-2',
			'icofont icofont-mathematical' => 'icofont-mathematical',
			'icofont icofont-pen-alt-1' => 'icofont-pen-alt-1',
			'icofont icofont-pen-alt-2' => 'icofont-pen-alt-2',
			'icofont icofont-pen-alt-3' => 'icofont-pen-alt-3',
			'icofont icofont-pen-holder-alt-1' => 'icofont-pen-holder-alt-1',
			'icofont icofont-pen-holder' => 'icofont-pen-holder',
			'icofont icofont-pen' => 'icofont-pen',
			'icofont icofont-pencil-alt-1' => 'icofont-pencil-alt-1',
			'icofont icofont-pencil-alt-2' => 'icofont-pencil-alt-2',
			'icofont icofont-pencil-alt-3' => 'icofont-pencil-alt-3',
			'icofont icofont-pencil-alt-4' => 'icofont-pencil-alt-4',
			'icofont icofont-pencil' => 'icofont-pencil',
			'icofont icofont-ruler-alt-1' => 'icofont-ruler-alt-1',
			'icofont icofont-ruler-alt-2' => 'icofont-ruler-alt-2',
			'icofont icofont-ruler-compass-alt' => 'icofont-ruler-compass-alt',
			'icofont icofont-ruler-compass' => 'icofont-ruler-compass',
			'icofont icofont-ruler-pencil-alt-1' => 'icofont-ruler-pencil-alt-1',
			'icofont icofont-ruler-pencil-alt-2' => 'icofont-ruler-pencil-alt-2',
			'icofont icofont-ruler-pencil' => 'icofont-ruler-pencil',
			'icofont icofont-ruler' => 'icofont-ruler',
			'icofont icofont-rulers-alt' => 'icofont-rulers-alt',
			'icofont icofont-rulers' => 'icofont-rulers',
			'icofont icofont-square-root' => 'icofont-square-root',
			'icofont icofont-ui-calculator' => 'icofont-ui-calculator',
			'icofont icofont-aids' => 'icofont-aids',
			'icofont icofont-ambulance-crescent' => 'icofont-ambulance-crescent',
			'icofont icofont-ambulance-cross' => 'icofont-ambulance-cross',
			'icofont icofont-ambulance' => 'icofont-ambulance',
			'icofont icofont-autism' => 'icofont-autism',
			'icofont icofont-bandage' => 'icofont-bandage',
			'icofont icofont-blind' => 'icofont-blind',
			'icofont icofont-blood-drop' => 'icofont-blood-drop',
			'icofont icofont-blood-test' => 'icofont-blood-test',
			'icofont icofont-blood' => 'icofont-blood',
			'icofont icofont-brain-alt' => 'icofont-brain-alt',
			'icofont icofont-brain' => 'icofont-brain',
			'icofont icofont-capsule' => 'icofont-capsule',
			'icofont icofont-crutch' => 'icofont-crutch',
			'icofont icofont-disabled' => 'icofont-disabled',
			'icofont icofont-dna-alt-1' => 'icofont-dna-alt-1',
			'icofont icofont-dna-alt-2' => 'icofont-dna-alt-2',
			'icofont icofont-dna' => 'icofont-dna',
			'icofont icofont-doctor-alt' => 'icofont-doctor-alt',
			'icofont icofont-doctor' => 'icofont-doctor',
			'icofont icofont-drug-pack' => 'icofont-drug-pack',
			'icofont icofont-drug' => 'icofont-drug',
			'icofont icofont-first-aid-alt' => 'icofont-first-aid-alt',
			'icofont icofont-first-aid' => 'icofont-first-aid',
			'icofont icofont-heart-beat-alt' => 'icofont-heart-beat-alt',
			'icofont icofont-heart-beat' => 'icofont-heart-beat',
			'icofont icofont-heartbeat' => 'icofont-heartbeat',
			'icofont icofont-herbal' => 'icofont-herbal',
			'icofont icofont-hospital' => 'icofont-hospital',
			'icofont icofont-icu' => 'icofont-icu',
			'icofont icofont-injection-syringe' => 'icofont-injection-syringe',
			'icofont icofont-laboratory' => 'icofont-laboratory',
			'icofont icofont-medical-sign-alt' => 'icofont-medical-sign-alt',
			'icofont icofont-medical-sign' => 'icofont-medical-sign',
			'icofont icofont-nurse-alt' => 'icofont-nurse-alt',
			'icofont icofont-nurse' => 'icofont-nurse',
			'icofont icofont-nursing-home' => 'icofont-nursing-home',
			'icofont icofont-operation-theater' => 'icofont-operation-theater',
			'icofont icofont-paralysis-disability' => 'icofont-paralysis-disability',
			'icofont icofont-patient-bed' => 'icofont-patient-bed',
			'icofont icofont-patient-file' => 'icofont-patient-file',
			'icofont icofont-pills' => 'icofont-pills',
			'icofont icofont-prescription' => 'icofont-prescription',
			'icofont icofont-pulse' => 'icofont-pulse',
			'icofont icofont-stethoscope-alt' => 'icofont-stethoscope-alt',
			'icofont icofont-stethoscope' => 'icofont-stethoscope',
			'icofont icofont-stretcher' => 'icofont-stretcher',
			'icofont icofont-surgeon-alt' => 'icofont-surgeon-alt',
			'icofont icofont-surgeon' => 'icofont-surgeon',
			'icofont icofont-tablets' => 'icofont-tablets',
			'icofont icofont-test-bottle' => 'icofont-test-bottle',
			'icofont icofont-test-tube' => 'icofont-test-tube',
			'icofont icofont-thermometer-alt' => 'icofont-thermometer-alt',
			'icofont icofont-thermometer' => 'icofont-thermometer',
			'icofont icofont-tooth' => 'icofont-tooth',
			'icofont icofont-xray' => 'icofont-xray',
			'icofont icofont-ui-add' => 'icofont-ui-add',
			'icofont icofont-ui-alarm' => 'icofont-ui-alarm',
			'icofont icofont-ui-battery' => 'icofont-ui-battery',
			'icofont icofont-ui-block' => 'icofont-ui-block',
			'icofont icofont-ui-bluetooth' => 'icofont-ui-bluetooth',
			'icofont icofont-ui-brightness' => 'icofont-ui-brightness',
			'icofont icofont-ui-browser' => 'icofont-ui-browser',
			'icofont icofont-ui-calendar' => 'icofont-ui-calendar',
			'icofont icofont-ui-call' => 'icofont-ui-call',
			'icofont icofont-ui-camera' => 'icofont-ui-camera',
			'icofont icofont-ui-cart' => 'icofont-ui-cart',
			'icofont icofont-ui-cell-phone' => 'icofont-ui-cell-phone',
			'icofont icofont-ui-chat' => 'icofont-ui-chat',
			'icofont icofont-ui-check' => 'icofont-ui-check',
			'icofont icofont-ui-clip-board' => 'icofont-ui-clip-board',
			'icofont icofont-ui-clip' => 'icofont-ui-clip',
			'icofont icofont-ui-clock' => 'icofont-ui-clock',
			'icofont icofont-ui-close' => 'icofont-ui-close',
			'icofont icofont-ui-contact-list' => 'icofont-ui-contact-list',
			'icofont icofont-ui-copy' => 'icofont-ui-copy',
			'icofont icofont-ui-cut' => 'icofont-ui-cut',
			'icofont icofont-ui-delete' => 'icofont-ui-delete',
			'icofont icofont-ui-dial-phone' => 'icofont-ui-dial-phone',
			'icofont icofont-ui-edit' => 'icofont-ui-edit',
			'icofont icofont-ui-email' => 'icofont-ui-email',
			'icofont icofont-ui-file' => 'icofont-ui-file',
			'icofont icofont-ui-fire-wall' => 'icofont-ui-fire-wall',
			'icofont icofont-ui-flash-light' => 'icofont-ui-flash-light',
			'icofont icofont-ui-flight' => 'icofont-ui-flight',
			'icofont icofont-ui-folder' => 'icofont-ui-folder',
			'icofont icofont-ui-game' => 'icofont-ui-game',
			'icofont icofont-ui-handicapped' => 'icofont-ui-handicapped',
			'icofont icofont-ui-home' => 'icofont-ui-home',
			'icofont icofont-ui-image' => 'icofont-ui-image',
			'icofont icofont-ui-laoding' => 'icofont-ui-laoding',
			'icofont icofont-ui-lock' => 'icofont-ui-lock',
			'icofont icofont-ui-love-add' => 'icofont-ui-love-add',
			'icofont icofont-ui-love-broken' => 'icofont-ui-love-broken',
			'icofont icofont-ui-love-remove' => 'icofont-ui-love-remove',
			'icofont icofont-ui-love' => 'icofont-ui-love',
			'icofont icofont-ui-map' => 'icofont-ui-map',
			'icofont icofont-ui-message' => 'icofont-ui-message',
			'icofont icofont-ui-messaging' => 'icofont-ui-messaging',
			'icofont icofont-ui-movie' => 'icofont-ui-movie',
			'icofont icofont-ui-music-player' => 'icofont-ui-music-player',
			'icofont icofont-ui-music' => 'icofont-ui-music',
			'icofont icofont-ui-mute' => 'icofont-ui-mute',
			'icofont icofont-ui-network' => 'icofont-ui-network',
			'icofont icofont-ui-next' => 'icofont-ui-next',
			'icofont icofont-ui-note' => 'icofont-ui-note',
			'icofont icofont-ui-office' => 'icofont-ui-office',
			'icofont icofont-ui-password' => 'icofont-ui-password',
			'icofont icofont-ui-pause' => 'icofont-ui-pause',
			'icofont icofont-ui-play-stop' => 'icofont-ui-play-stop',
			'icofont icofont-ui-play' => 'icofont-ui-play',
			'icofont icofont-ui-pointer' => 'icofont-ui-pointer',
			'icofont icofont-ui-power' => 'icofont-ui-power',
			'icofont icofont-ui-press' => 'icofont-ui-press',
			'icofont icofont-ui-previous' => 'icofont-ui-previous',
			'icofont icofont-ui-rate-add' => 'icofont-ui-rate-add',
			'icofont icofont-ui-rate-blank' => 'icofont-ui-rate-blank',
			'icofont icofont-ui-rate-remove' => 'icofont-ui-rate-remove',
			'icofont icofont-ui-rating' => 'icofont-ui-rating',
			'icofont icofont-ui-record' => 'icofont-ui-record',
			'icofont icofont-ui-remove' => 'icofont-ui-remove',
			'icofont icofont-ui-reply' => 'icofont-ui-reply',
			'icofont icofont-ui-rotation' => 'icofont-ui-rotation',
			'icofont icofont-ui-rss' => 'icofont-ui-rss',
			'icofont icofont-ui-search' => 'icofont-ui-search',
			'icofont icofont-ui-settings' => 'icofont-ui-settings',
			'icofont icofont-ui-social-link' => 'icofont-ui-social-link',
			'icofont icofont-ui-tag' => 'icofont-ui-tag',
			'icofont icofont-ui-text-chat' => 'icofont-ui-text-chat',
			'icofont icofont-ui-text-loading' => 'icofont-ui-text-loading',
			'icofont icofont-ui-theme' => 'icofont-ui-theme',
			'icofont icofont-ui-timer' => 'icofont-ui-timer',
			'icofont icofont-ui-touch-phone' => 'icofont-ui-touch-phone',
			'icofont icofont-ui-travel' => 'icofont-ui-travel',
			'icofont icofont-ui-unlock' => 'icofont-ui-unlock',
			'icofont icofont-ui-user-group' => 'icofont-ui-user-group',
			'icofont icofont-ui-user' => 'icofont-ui-user',
			'icofont icofont-ui-v-card' => 'icofont-ui-v-card',
			'icofont icofont-ui-video-chat' => 'icofont-ui-video-chat',
			'icofont icofont-ui-video-message' => 'icofont-ui-video-message',
			'icofont icofont-ui-video-play' => 'icofont-ui-video-play',
			'icofont icofont-ui-video' => 'icofont-ui-video',
			'icofont icofont-ui-volume' => 'icofont-ui-volume',
			'icofont icofont-ui-weather' => 'icofont-ui-weather',
			'icofont icofont-ui-wifi' => 'icofont-ui-wifi',
			'icofont icofont-ui-zoom-in' => 'icofont-ui-zoom-in',
			'icofont icofont-ui-zoom-out' => 'icofont-ui-zoom-out',
			'icofont icofont-cassette-player' => 'icofont-cassette-player',
			'icofont icofont-cassette' => 'icofont-cassette',
			'icofont icofont-forward' => 'icofont-forward',
			'icofont icofont-guiter' => 'icofont-guiter',
			'icofont icofont-movie' => 'icofont-movie',
			'icofont icofont-multimedia' => 'icofont-multimedia',
			'icofont icofont-music-alt' => 'icofont-music-alt',
			'icofont icofont-music-disk' => 'icofont-music-disk',
			'icofont icofont-music-note' => 'icofont-music-note',
			'icofont icofont-music-notes' => 'icofont-music-notes',
			'icofont icofont-music' => 'icofont-music',
			'icofont icofont-mute-volume' => 'icofont-mute-volume',
			'icofont icofont-pause' => 'icofont-pause',
			'icofont icofont-play-alt-1' => 'icofont-play-alt-1',
			'icofont icofont-play-alt-2' => 'icofont-play-alt-2',
			'icofont icofont-play-alt-3' => 'icofont-play-alt-3',
			'icofont icofont-play-pause' => 'icofont-play-pause',
			'icofont icofont-play' => 'icofont-play',
			'icofont icofont-record' => 'icofont-record',
			'icofont icofont-retro-music-disk' => 'icofont-retro-music-disk',
			'icofont icofont-rewind' => 'icofont-rewind',
			'icofont icofont-song-notes' => 'icofont-song-notes',
			'icofont icofont-sound-wave-alt' => 'icofont-sound-wave-alt',
			'icofont icofont-sound-wave' => 'icofont-sound-wave',
			'icofont icofont-stop' => 'icofont-stop',
			'icofont icofont-video-alt' => 'icofont-video-alt',
			'icofont icofont-video-cam' => 'icofont-video-cam',
			'icofont icofont-video-clapper' => 'icofont-video-clapper',
			'icofont icofont-video' => 'icofont-video',
			'icofont icofont-volume-bar' => 'icofont-volume-bar',
			'icofont icofont-volume-down' => 'icofont-volume-down',
			'icofont icofont-volume-mute' => 'icofont-volume-mute',
			'icofont icofont-volume-off' => 'icofont-volume-off',
			'icofont icofont-volume-up' => 'icofont-volume-up',
			'icofont icofont-youtube-play' => 'icofont-youtube-play',
			'icofont icofont-2checkout-alt' => 'icofont-2checkout-alt',
			'icofont icofont-2checkout' => 'icofont-2checkout',
			'icofont icofont-amazon-alt' => 'icofont-amazon-alt',
			'icofont icofont-amazon' => 'icofont-amazon',
			'icofont icofont-american-express-alt' => 'icofont-american-express-alt',
			'icofont icofont-american-express' => 'icofont-american-express',
			'icofont icofont-apple-pay-alt' => 'icofont-apple-pay-alt',
			'icofont icofont-apple-pay' => 'icofont-apple-pay',
			'icofont icofont-bank-transfer-alt' => 'icofont-bank-transfer-alt',
			'icofont icofont-bank-transfer' => 'icofont-bank-transfer',
			'icofont icofont-braintree-alt' => 'icofont-braintree-alt',
			'icofont icofont-braintree' => 'icofont-braintree',
			'icofont icofont-cash-on-delivery-alt' => 'icofont-cash-on-delivery-alt',
			'icofont icofont-cash-on-delivery' => 'icofont-cash-on-delivery',
			'icofont icofont-diners-club-alt-1' => 'icofont-diners-club-alt-1',
			'icofont icofont-diners-club-alt-2' => 'icofont-diners-club-alt-2',
			'icofont icofont-diners-club-alt-3' => 'icofont-diners-club-alt-3',
			'icofont icofont-diners-club' => 'icofont-diners-club',
			'icofont icofont-discover-alt' => 'icofont-discover-alt',
			'icofont icofont-discover' => 'icofont-discover',
			'icofont icofont-eway-alt' => 'icofont-eway-alt',
			'icofont icofont-eway' => 'icofont-eway',
			'icofont icofont-google-wallet-alt-1' => 'icofont-google-wallet-alt-1',
			'icofont icofont-google-wallet-alt-2' => 'icofont-google-wallet-alt-2',
			'icofont icofont-google-wallet-alt-3' => 'icofont-google-wallet-alt-3',
			'icofont icofont-google-wallet' => 'icofont-google-wallet',
			'icofont icofont-jcb-alt' => 'icofont-jcb-alt',
			'icofont icofont-jcb' => 'icofont-jcb',
			'icofont icofont-maestro-alt' => 'icofont-maestro-alt',
			'icofont icofont-maestro' => 'icofont-maestro',
			'icofont icofont-mastercard-alt' => 'icofont-mastercard-alt',
			'icofont icofont-mastercard' => 'icofont-mastercard',
			'icofont icofont-payoneer-alt' => 'icofont-payoneer-alt',
			'icofont icofont-payoneer' => 'icofont-payoneer',
			'icofont icofont-paypal-alt' => 'icofont-paypal-alt',
			'icofont icofont-paypal' => 'icofont-paypal',
			'icofont icofont-sage-alt' => 'icofont-sage-alt',
			'icofont icofont-sage' => 'icofont-sage',
			'icofont icofont-skrill-alt' => 'icofont-skrill-alt',
			'icofont icofont-skrill' => 'icofont-skrill',
			'icofont icofont-stripe-alt' => 'icofont-stripe-alt',
			'icofont icofont-stripe' => 'icofont-stripe',
			'icofont icofont-visa-alt' => 'icofont-visa-alt',
			'icofont icofont-visa-electron' => 'icofont-visa-electron',
			'icofont icofont-visa' => 'icofont-visa',
			'icofont icofont-western-union-alt' => 'icofont-western-union-alt',
			'icofont icofont-western-union' => 'icofont-western-union',
			'icofont icofont-boy' => 'icofont-boy',
			'icofont icofont-business-man-alt-1' => 'icofont-business-man-alt-1',
			'icofont icofont-business-man-alt-2' => 'icofont-business-man-alt-2',
			'icofont icofont-business-man-alt-3' => 'icofont-business-man-alt-3',
			'icofont icofont-business-man' => 'icofont-business-man',
			'icofont icofont-female' => 'icofont-female',
			'icofont icofont-funky-man' => 'icofont-funky-man',
			'icofont icofont-girl-alt' => 'icofont-girl-alt',
			'icofont icofont-girl' => 'icofont-girl',
			'icofont icofont-group' => 'icofont-group',
			'icofont icofont-hotel-boy-alt' => 'icofont-hotel-boy-alt',
			'icofont icofont-hotel-boy' => 'icofont-hotel-boy',
			'icofont icofont-kid' => 'icofont-kid',
			'icofont icofont-man-in-glasses' => 'icofont-man-in-glasses',
			'icofont icofont-people' => 'icofont-people',
			'icofont icofont-support' => 'icofont-support',
			'icofont icofont-user-alt-1' => 'icofont-user-alt-1',
			'icofont icofont-user-alt-2' => 'icofont-user-alt-2',
			'icofont icofont-user-alt-3' => 'icofont-user-alt-3',
			'icofont icofont-user-alt-4' => 'icofont-user-alt-4',
			'icofont icofont-user-alt-5' => 'icofont-user-alt-5',
			'icofont icofont-user-alt-6' => 'icofont-user-alt-6',
			'icofont icofont-user-alt-7' => 'icofont-user-alt-7',
			'icofont icofont-user-female' => 'icofont-user-female',
			'icofont icofont-user-male' => 'icofont-user-male',
			'icofont icofont-user-suited' => 'icofont-user-suited',
			'icofont icofont-user' => 'icofont-user',
			'icofont icofont-users-alt-1' => 'icofont-users-alt-1',
			'icofont icofont-users-alt-2' => 'icofont-users-alt-2',
			'icofont icofont-users-alt-3' => 'icofont-users-alt-3',
			'icofont icofont-users-alt-4' => 'icofont-users-alt-4',
			'icofont icofont-users-alt-5' => 'icofont-users-alt-5',
			'icofont icofont-users-alt-6' => 'icofont-users-alt-6',
			'icofont icofont-users-social' => 'icofont-users-social',
			'icofont icofont-users' => 'icofont-users',
			'icofont icofont-waiter-alt' => 'icofont-waiter-alt',
			'icofont icofont-waiter' => 'icofont-waiter',
			'icofont icofont-woman-in-glasses' => 'icofont-woman-in-glasses',
			'icofont icofont-search-1' => 'icofont-search-1',
			'icofont icofont-search-2' => 'icofont-search-2',
			'icofont icofont-search-document' => 'icofont-search-document',
			'icofont icofont-search-folder' => 'icofont-search-folder',
			'icofont icofont-search-job' => 'icofont-search-job',
			'icofont icofont-search-map' => 'icofont-search-map',
			'icofont icofont-search-property' => 'icofont-search-property',
			'icofont icofont-search-restaurant' => 'icofont-search-restaurant',
			'icofont icofont-search-stock' => 'icofont-search-stock',
			'icofont icofont-search-user' => 'icofont-search-user',
			'icofont icofont-search' => 'icofont-search',
			'icofont icofont-500px' => 'icofont-500px',
			'icofont icofont-aim' => 'icofont-aim',
			'icofont icofont-badoo' => 'icofont-badoo',
			'icofont icofont-baidu-tieba' => 'icofont-baidu-tieba',
			'icofont icofont-bbm-messenger' => 'icofont-bbm-messenger',
			'icofont icofont-bebo' => 'icofont-bebo',
			'icofont icofont-behance' => 'icofont-behance',
			'icofont icofont-blogger' => 'icofont-blogger',
			'icofont icofont-bootstrap' => 'icofont-bootstrap',
			'icofont icofont-brightkite' => 'icofont-brightkite',
			'icofont icofont-cloudapp' => 'icofont-cloudapp',
			'icofont icofont-concrete5' => 'icofont-concrete5',
			'icofont icofont-delicious' => 'icofont-delicious',
			'icofont icofont-designbump' => 'icofont-designbump',
			'icofont icofont-designfloat' => 'icofont-designfloat',
			'icofont icofont-deviantart' => 'icofont-deviantart',
			'icofont icofont-digg' => 'icofont-digg',
			'icofont icofont-dotcms' => 'icofont-dotcms',
			'icofont icofont-dribbble' => 'icofont-dribbble',
			'icofont icofont-dribble' => 'icofont-dribble',
			'icofont icofont-dropbox' => 'icofont-dropbox',
			'icofont icofont-ebuddy' => 'icofont-ebuddy',
			'icofont icofont-ello' => 'icofont-ello',
			'icofont icofont-ember' => 'icofont-ember',
			'icofont icofont-envato' => 'icofont-envato',
			'icofont icofont-evernote' => 'icofont-evernote',
			'icofont icofont-facebook-messenger' => 'icofont-facebook-messenger',
			'icofont icofont-facebook' => 'icofont-facebook',
			'icofont icofont-feedburner' => 'icofont-feedburner',
			'icofont icofont-flikr' => 'icofont-flikr',
			'icofont icofont-folkd' => 'icofont-folkd',
			'icofont icofont-foursquare' => 'icofont-foursquare',
			'icofont icofont-friendfeed' => 'icofont-friendfeed',
			'icofont icofont-ghost' => 'icofont-ghost',
			'icofont icofont-github' => 'icofont-github',
			'icofont icofont-gnome' => 'icofont-gnome',
			'icofont icofont-google-buzz' => 'icofont-google-buzz',
			'icofont icofont-google-hangouts' => 'icofont-google-hangouts',
			'icofont icofont-google-map' => 'icofont-google-map',
			'icofont icofont-google-plus' => 'icofont-google-plus',
			'icofont icofont-google-talk' => 'icofont-google-talk',
			'icofont icofont-hype-machine' => 'icofont-hype-machine',
			'icofont icofont-instagram' => 'icofont-instagram',
			'icofont icofont-kakaotalk' => 'icofont-kakaotalk',
			'icofont icofont-kickstarter' => 'icofont-kickstarter',
			'icofont icofont-kik' => 'icofont-kik',
			'icofont icofont-kiwibox' => 'icofont-kiwibox',
			'icofont icofont-line-messenger' => 'icofont-line-messenger',
			'icofont icofont-line' => 'icofont-line',
			'icofont icofont-linkedin' => 'icofont-linkedin',
			'icofont icofont-linux-mint' => 'icofont-linux-mint',
			'icofont icofont-live-messenger' => 'icofont-live-messenger',
			'icofont icofont-livejournal' => 'icofont-livejournal',
			'icofont icofont-magento' => 'icofont-magento',
			'icofont icofont-meetme' => 'icofont-meetme',
			'icofont icofont-meetup' => 'icofont-meetup',
			'icofont icofont-mixx' => 'icofont-mixx',
			'icofont icofont-newsvine' => 'icofont-newsvine',
			'icofont icofont-nimbuss' => 'icofont-nimbuss',
			'icofont icofont-odnoklassniki' => 'icofont-odnoklassniki',
			'icofont icofont-opencart' => 'icofont-opencart',
			'icofont icofont-oscommerce' => 'icofont-oscommerce',
			'icofont icofont-pandora' => 'icofont-pandora',
			'icofont icofont-photobucket' => 'icofont-photobucket',
			'icofont icofont-picasa' => 'icofont-picasa',
			'icofont icofont-pinterest' => 'icofont-pinterest',
			'icofont icofont-prestashop' => 'icofont-prestashop',
			'icofont icofont-qik' => 'icofont-qik',
			'icofont icofont-qq' => 'icofont-qq',
			'icofont icofont-readernaut' => 'icofont-readernaut',
			'icofont icofont-reddit' => 'icofont-reddit',
			'icofont icofont-renren' => 'icofont-renren',
			'icofont icofont-rss' => 'icofont-rss',
			'icofont icofont-shopify' => 'icofont-shopify',
			'icofont icofont-silverstripe' => 'icofont-silverstripe',
			'icofont icofont-skype' => 'icofont-skype',
			'icofont icofont-slack' => 'icofont-slack',
			'icofont icofont-slashdot' => 'icofont-slashdot',
			'icofont icofont-slidshare' => 'icofont-slidshare',
			'icofont icofont-smugmug' => 'icofont-smugmug',
			'icofont icofont-snapchat' => 'icofont-snapchat',
			'icofont icofont-soundcloud' => 'icofont-soundcloud',
			'icofont icofont-spotify' => 'icofont-spotify',
			'icofont icofont-stack-exchange' => 'icofont-stack-exchange',
			'icofont icofont-stack-overflow' => 'icofont-stack-overflow',
			'icofont icofont-steam' => 'icofont-steam',
			'icofont icofont-stumbleupon' => 'icofont-stumbleupon',
			'icofont icofont-tagged' => 'icofont-tagged',
			'icofont icofont-technorati' => 'icofont-technorati',
			'icofont icofont-telegram' => 'icofont-telegram',
			'icofont icofont-tinder' => 'icofont-tinder',
			'icofont icofont-trello' => 'icofont-trello',
			'icofont icofont-tumblr' => 'icofont-tumblr',
			'icofont icofont-twitch' => 'icofont-twitch',
			'icofont icofont-twitter' => 'icofont-twitter',
			'icofont icofont-typo3' => 'icofont-typo3',
			'icofont icofont-ubercart' => 'icofont-ubercart',
			'icofont icofont-viber' => 'icofont-viber',
			'icofont icofont-viddler' => 'icofont-viddler',
			'icofont icofont-vimeo' => 'icofont-vimeo',
			'icofont icofont-vine' => 'icofont-vine',
			'icofont icofont-virb' => 'icofont-virb',
			'icofont icofont-virtuemart' => 'icofont-virtuemart',
			'icofont icofont-vk' => 'icofont-vk',
			'icofont icofont-wechat' => 'icofont-wechat',
			'icofont icofont-weibo' => 'icofont-weibo',
			'icofont icofont-whatsapp' => 'icofont-whatsapp',
			'icofont icofont-xing' => 'icofont-xing',
			'icofont icofont-yahoo' => 'icofont-yahoo',
			'icofont icofont-yelp' => 'icofont-yelp',
			'icofont icofont-youku' => 'icofont-youku',
			'icofont icofont-youtube' => 'icofont-youtube',
			'icofont icofont-zencart' => 'icofont-zencart',
			'icofont icofont-badminton-birdie' => 'icofont-badminton-birdie',
			'icofont icofont-baseball' => 'icofont-baseball',
			'icofont icofont-baseballer' => 'icofont-baseballer',
			'icofont icofont-basketball-hoop' => 'icofont-basketball-hoop',
			'icofont icofont-basketball' => 'icofont-basketball',
			'icofont icofont-billiard-ball' => 'icofont-billiard-ball',
			'icofont icofont-boot-alt-1' => 'icofont-boot-alt-1',
			'icofont icofont-boot-alt-2' => 'icofont-boot-alt-2',
			'icofont icofont-boot' => 'icofont-boot',
			'icofont icofont-bowling-alt' => 'icofont-bowling-alt',
			'icofont icofont-bowling' => 'icofont-bowling',
			'icofont icofont-canoe' => 'icofont-canoe',
			'icofont icofont-cheer-leader' => 'icofont-cheer-leader',
			'icofont icofont-climbing' => 'icofont-climbing',
			'icofont icofont-corner' => 'icofont-corner',
			'icofont icofont-field-alt' => 'icofont-field-alt',
			'icofont icofont-field' => 'icofont-field',
			'icofont icofont-football-alt' => 'icofont-football-alt',
			'icofont icofont-football-american' => 'icofont-football-american',
			'icofont icofont-football' => 'icofont-football',
			'icofont icofont-foul' => 'icofont-foul',
			'icofont icofont-goal-keeper' => 'icofont-goal-keeper',
			'icofont icofont-goal' => 'icofont-goal',
			'icofont icofont-golf-alt' => 'icofont-golf-alt',
			'icofont icofont-golf-bag' => 'icofont-golf-bag',
			'icofont icofont-golf-cart' => 'icofont-golf-cart',
			'icofont icofont-golf-field' => 'icofont-golf-field',
			'icofont icofont-golf' => 'icofont-golf',
			'icofont icofont-golfer' => 'icofont-golfer',
			'icofont icofont-helmet' => 'icofont-helmet',
			'icofont icofont-hockey-alt' => 'icofont-hockey-alt',
			'icofont icofont-hockey' => 'icofont-hockey',
			'icofont icofont-ice-skate' => 'icofont-ice-skate',
			'icofont icofont-jersey-alt' => 'icofont-jersey-alt',
			'icofont icofont-jersey' => 'icofont-jersey',
			'icofont icofont-jumping' => 'icofont-jumping',
			'icofont icofont-kick' => 'icofont-kick',
			'icofont icofont-leg' => 'icofont-leg',
			'icofont icofont-match-review' => 'icofont-match-review',
			'icofont icofont-medal-sport' => 'icofont-medal-sport',
			'icofont icofont-offside' => 'icofont-offside',
			'icofont icofont-olympic-logo' => 'icofont-olympic-logo',
			'icofont icofont-olympic' => 'icofont-olympic',
			'icofont icofont-padding' => 'icofont-padding',
			'icofont icofont-penalty-card' => 'icofont-penalty-card',
			'icofont icofont-racer' => 'icofont-racer',
			'icofont icofont-racing-car' => 'icofont-racing-car',
			'icofont icofont-racing-flag-alt' => 'icofont-racing-flag-alt',
			'icofont icofont-racing-flag' => 'icofont-racing-flag',
			'icofont icofont-racings-wheel' => 'icofont-racings-wheel',
			'icofont icofont-referee' => 'icofont-referee',
			'icofont icofont-refree-jersey' => 'icofont-refree-jersey',
			'icofont icofont-result-sport' => 'icofont-result-sport',
			'icofont icofont-rugby-ball' => 'icofont-rugby-ball',
			'icofont icofont-rugby-player' => 'icofont-rugby-player',
			'icofont icofont-rugby' => 'icofont-rugby',
			'icofont icofont-runner-alt-1' => 'icofont-runner-alt-1',
			'icofont icofont-runner-alt-2' => 'icofont-runner-alt-2',
			'icofont icofont-runner' => 'icofont-runner',
			'icofont icofont-score-board' => 'icofont-score-board',
			'icofont icofont-skiing-man' => 'icofont-skiing-man',
			'icofont icofont-skydiving-goggles' => 'icofont-skydiving-goggles',
			'icofont icofont-snow-mobile' => 'icofont-snow-mobile',
			'icofont icofont-steering' => 'icofont-steering',
			'icofont icofont-stopwatch' => 'icofont-stopwatch',
			'icofont icofont-substitute' => 'icofont-substitute',
			'icofont icofont-swimmer' => 'icofont-swimmer',
			'icofont icofont-table-tennis' => 'icofont-table-tennis',
			'icofont icofont-team-alt' => 'icofont-team-alt',
			'icofont icofont-team' => 'icofont-team',
			'icofont icofont-tennis-player' => 'icofont-tennis-player',
			'icofont icofont-tennis' => 'icofont-tennis',
			'icofont icofont-tracking' => 'icofont-tracking',
			'icofont icofont-trophy-alt' => 'icofont-trophy-alt',
			'icofont icofont-trophy' => 'icofont-trophy',
			'icofont icofont-volleyball-alt' => 'icofont-volleyball-alt',
			'icofont icofont-volleyball-fire' => 'icofont-volleyball-fire',
			'icofont icofont-volleyball' => 'icofont-volleyball',
			'icofont icofont-water-bottle' => 'icofont-water-bottle',
			'icofont icofont-whistle-alt' => 'icofont-whistle-alt',
			'icofont icofont-whistle' => 'icofont-whistle',
			'icofont icofont-win-trophy' => 'icofont-win-trophy',
			'icofont icofont-align-center' => 'icofont-align-center',
			'icofont icofont-align-left' => 'icofont-align-left',
			'icofont icofont-align-right' => 'icofont-align-right',
			'icofont icofont-all-caps' => 'icofont-all-caps',
			'icofont icofont-bold' => 'icofont-bold',
			'icofont icofont-brush' => 'icofont-brush',
			'icofont icofont-clip-board' => 'icofont-clip-board',
			'icofont icofont-code-alt' => 'icofont-code-alt',
			'icofont icofont-color-bucket' => 'icofont-color-bucket',
			'icofont icofont-color-picker' => 'icofont-color-picker',
			'icofont icofont-copy-invert' => 'icofont-copy-invert',
			'icofont icofont-copy' => 'icofont-copy',
			'icofont icofont-cut' => 'icofont-cut',
			'icofont icofont-delete-alt' => 'icofont-delete-alt',
			'icofont icofont-edit-alt' => 'icofont-edit-alt',
			'icofont icofont-eraser-alt' => 'icofont-eraser-alt',
			'icofont icofont-font' => 'icofont-font',
			'icofont icofont-heading' => 'icofont-heading',
			'icofont icofont-indent' => 'icofont-indent',
			'icofont icofont-italic-alt' => 'icofont-italic-alt',
			'icofont icofont-italic' => 'icofont-italic',
			'icofont icofont-justify-all' => 'icofont-justify-all',
			'icofont icofont-justify-center' => 'icofont-justify-center',
			'icofont icofont-justify-left' => 'icofont-justify-left',
			'icofont icofont-justify-right' => 'icofont-justify-right',
			'icofont icofont-link-broken' => 'icofont-link-broken',
			'icofont icofont-outdent' => 'icofont-outdent',
			'icofont icofont-paper-clip' => 'icofont-paper-clip',
			'icofont icofont-paragraph' => 'icofont-paragraph',
			'icofont icofont-pin' => 'icofont-pin',
			'icofont icofont-printer' => 'icofont-printer',
			'icofont icofont-redo' => 'icofont-redo',
			'icofont icofont-rotation' => 'icofont-rotation',
			'icofont icofont-save' => 'icofont-save',
			'icofont icofont-small-cap' => 'icofont-small-cap',
			'icofont icofont-strike-through' => 'icofont-strike-through',
			'icofont icofont-sub-listing' => 'icofont-sub-listing',
			'icofont icofont-subscript' => 'icofont-subscript',
			'icofont icofont-superscript' => 'icofont-superscript',
			'icofont icofont-table' => 'icofont-table',
			'icofont icofont-text-height' => 'icofont-text-height',
			'icofont icofont-text-width' => 'icofont-text-width',
			'icofont icofont-trash' => 'icofont-trash',
			'icofont icofont-underline' => 'icofont-underline',
			'icofont icofont-undo' => 'icofont-undo',
			'icofont icofont-air-balloon' => 'icofont-air-balloon',
			'icofont icofont-airplane-alt' => 'icofont-airplane-alt',
			'icofont icofont-airplane' => 'icofont-airplane',
			'icofont icofont-articulated-truck' => 'icofont-articulated-truck',
			'icofont icofont-auto-mobile' => 'icofont-auto-mobile',
			'icofont icofont-auto-rickshaw' => 'icofont-auto-rickshaw',
			'icofont icofont-bicycle-alt-1' => 'icofont-bicycle-alt-1',
			'icofont icofont-bicycle-alt-2' => 'icofont-bicycle-alt-2',
			'icofont icofont-bicycle' => 'icofont-bicycle',
			'icofont icofont-bus-alt-1' => 'icofont-bus-alt-1',
			'icofont icofont-bus-alt-2' => 'icofont-bus-alt-2',
			'icofont icofont-bus-alt-3' => 'icofont-bus-alt-3',
			'icofont icofont-bus' => 'icofont-bus',
			'icofont icofont-cab' => 'icofont-cab',
			'icofont icofont-cable-car' => 'icofont-cable-car',
			'icofont icofont-car-alt-1' => 'icofont-car-alt-1',
			'icofont icofont-car-alt-2' => 'icofont-car-alt-2',
			'icofont icofont-car-alt-3' => 'icofont-car-alt-3',
			'icofont icofont-car-alt-4' => 'icofont-car-alt-4',
			'icofont icofont-car' => 'icofont-car',
			'icofont icofont-delivery-time' => 'icofont-delivery-time',
			'icofont icofont-fast-delivery' => 'icofont-fast-delivery',
			'icofont icofont-fire-truck-alt' => 'icofont-fire-truck-alt',
			'icofont icofont-fire-truck' => 'icofont-fire-truck',
			'icofont icofont-free-delivery' => 'icofont-free-delivery',
			'icofont icofont-helicopter' => 'icofont-helicopter',
			'icofont icofont-motor-bike-alt' => 'icofont-motor-bike-alt',
			'icofont icofont-motor-bike' => 'icofont-motor-bike',
			'icofont icofont-motor-biker' => 'icofont-motor-biker',
			'icofont icofont-oil-truck' => 'icofont-oil-truck',
			'icofont icofont-rickshaw' => 'icofont-rickshaw',
			'icofont icofont-rocket-alt-1' => 'icofont-rocket-alt-1',
			'icofont icofont-rocket-alt-2' => 'icofont-rocket-alt-2',
			'icofont icofont-rocket' => 'icofont-rocket',
			'icofont icofont-sail-boat-alt-1' => 'icofont-sail-boat-alt-1',
			'icofont icofont-sail-boat-alt-2' => 'icofont-sail-boat-alt-2',
			'icofont icofont-sail-boat' => 'icofont-sail-boat',
			'icofont icofont-scooter' => 'icofont-scooter',
			'icofont icofont-sea-plane' => 'icofont-sea-plane',
			'icofont icofont-ship-alt' => 'icofont-ship-alt',
			'icofont icofont-ship' => 'icofont-ship',
			'icofont icofont-speed-boat' => 'icofont-speed-boat',
			'icofont icofont-taxi' => 'icofont-taxi',
			'icofont icofont-tractor' => 'icofont-tractor',
			'icofont icofont-train-line' => 'icofont-train-line',
			'icofont icofont-train-steam' => 'icofont-train-steam',
			'icofont icofont-tram' => 'icofont-tram',
			'icofont icofont-truck-alt' => 'icofont-truck-alt',
			'icofont icofont-truck-loaded' => 'icofont-truck-loaded',
			'icofont icofont-truck' => 'icofont-truck',
			'icofont icofont-van-alt' => 'icofont-van-alt',
			'icofont icofont-van' => 'icofont-van',
			'icofont icofont-yacht' => 'icofont-yacht',
			'icofont icofont-5-star-hotel' => 'icofont-5-star-hotel',
			'icofont icofont-air-ticket' => 'icofont-air-ticket',
			'icofont icofont-beach-bed' => 'icofont-beach-bed',
			'icofont icofont-beach' => 'icofont-beach',
			'icofont icofont-camping-vest' => 'icofont-camping-vest',
			'icofont icofont-direction-sign' => 'icofont-direction-sign',
			'icofont icofont-hill-side' => 'icofont-hill-side',
			'icofont icofont-hill' => 'icofont-hill',
			'icofont icofont-hotel' => 'icofont-hotel',
			'icofont icofont-island-alt' => 'icofont-island-alt',
			'icofont icofont-island' => 'icofont-island',
			'icofont icofont-sandals-female' => 'icofont-sandals-female',
			'icofont icofont-sandals-male' => 'icofont-sandals-male',
			'icofont icofont-travelling' => 'icofont-travelling',
			'icofont icofont-breakdown' => 'icofont-breakdown',
			'icofont icofont-celsius' => 'icofont-celsius',
			'icofont icofont-clouds' => 'icofont-clouds',
			'icofont icofont-cloudy' => 'icofont-cloudy',
			'icofont icofont-dust' => 'icofont-dust',
			'icofont icofont-eclipse' => 'icofont-eclipse',
			'icofont icofont-fahrenheit' => 'icofont-fahrenheit',
			'icofont icofont-forest-fire' => 'icofont-forest-fire',
			'icofont icofont-full-night' => 'icofont-full-night',
			'icofont icofont-full-sunny' => 'icofont-full-sunny',
			'icofont icofont-hail-night' => 'icofont-hail-night',
			'icofont icofont-hail-rainy-night' => 'icofont-hail-rainy-night',
			'icofont icofont-hail-rainy-sunny' => 'icofont-hail-rainy-sunny',
			'icofont icofont-hail-rainy' => 'icofont-hail-rainy',
			'icofont icofont-hail-sunny' => 'icofont-hail-sunny',
			'icofont icofont-hail-thunder-night' => 'icofont-hail-thunder-night',
			'icofont icofont-hail-thunder-sunny' => 'icofont-hail-thunder-sunny',
			'icofont icofont-hail-thunder' => 'icofont-hail-thunder',
			'icofont icofont-hail' => 'icofont-hail',
			'icofont icofont-hill-night' => 'icofont-hill-night',
			'icofont icofont-hill-sunny' => 'icofont-hill-sunny',
			'icofont icofont-hurricane' => 'icofont-hurricane',
			'icofont icofont-meteor' => 'icofont-meteor',
			'icofont icofont-night' => 'icofont-night',
			'icofont icofont-rainy-night' => 'icofont-rainy-night',
			'icofont icofont-rainy-sunny' => 'icofont-rainy-sunny',
			'icofont icofont-rainy-thunder' => 'icofont-rainy-thunder',
			'icofont icofont-rainy' => 'icofont-rainy',
			'icofont icofont-snow-alt' => 'icofont-snow-alt',
			'icofont icofont-snow-flake' => 'icofont-snow-flake',
			'icofont icofont-snow-temp' => 'icofont-snow-temp',
			'icofont icofont-snow' => 'icofont-snow',
			'icofont icofont-snowy-hail' => 'icofont-snowy-hail',
			'icofont icofont-snowy-night-hail' => 'icofont-snowy-night-hail',
			'icofont icofont-snowy-night-rainy' => 'icofont-snowy-night-rainy',
			'icofont icofont-snowy-night' => 'icofont-snowy-night',
			'icofont icofont-snowy-rainy' => 'icofont-snowy-rainy',
			'icofont icofont-snowy-sunny-hail' => 'icofont-snowy-sunny-hail',
			'icofont icofont-snowy-sunny-rainy' => 'icofont-snowy-sunny-rainy',
			'icofont icofont-snowy-sunny' => 'icofont-snowy-sunny',
			'icofont icofont-snowy-thunder-night' => 'icofont-snowy-thunder-night',
			'icofont icofont-snowy-thunder-sunny' => 'icofont-snowy-thunder-sunny',
			'icofont icofont-snowy-thunder' => 'icofont-snowy-thunder',
			'icofont icofont-snowy-windy-night' => 'icofont-snowy-windy-night',
			'icofont icofont-snowy-windy-sunny' => 'icofont-snowy-windy-sunny',
			'icofont icofont-snowy-windy' => 'icofont-snowy-windy',
			'icofont icofont-snowy' => 'icofont-snowy',
			'icofont icofont-sun-alt' => 'icofont-sun-alt',
			'icofont icofont-sun-rise' => 'icofont-sun-rise',
			'icofont icofont-sun-set' => 'icofont-sun-set',
			'icofont icofont-sun' => 'icofont-sun',
			'icofont icofont-sunny-day-temp' => 'icofont-sunny-day-temp',
			'icofont icofont-sunny' => 'icofont-sunny',
			'icofont icofont-thunder-light' => 'icofont-thunder-light',
			'icofont icofont-tornado' => 'icofont-tornado',
			'icofont icofont-umbrella-alt' => 'icofont-umbrella-alt',
			'icofont icofont-umbrella' => 'icofont-umbrella',
			'icofont icofont-volcano' => 'icofont-volcano',
			'icofont icofont-wave' => 'icofont-wave',
			'icofont icofont-wind-scale-0' => 'icofont-wind-scale-0',
			'icofont icofont-wind-scale-1' => 'icofont-wind-scale-1',
			'icofont icofont-wind-scale-10' => 'icofont-wind-scale-10',
			'icofont icofont-wind-scale-11' => 'icofont-wind-scale-11',
			'icofont icofont-wind-scale-12' => 'icofont-wind-scale-12',
			'icofont icofont-wind-scale-2' => 'icofont-wind-scale-2',
			'icofont icofont-wind-scale-3' => 'icofont-wind-scale-3',
			'icofont icofont-wind-scale-4' => 'icofont-wind-scale-4',
			'icofont icofont-wind-scale-5' => 'icofont-wind-scale-5',
			'icofont icofont-wind-scale-6' => 'icofont-wind-scale-6',
			'icofont icofont-wind-scale-7' => 'icofont-wind-scale-7',
			'icofont icofont-wind-scale-8' => 'icofont-wind-scale-8',
			'icofont icofont-wind-scale-9' => 'icofont-wind-scale-9',
			'icofont icofont-wind-waves' => 'icofont-wind-waves',
			'icofont icofont-wind' => 'icofont-wind',
			'icofont icofont-windy-hail' => 'icofont-windy-hail',
			'icofont icofont-windy-night' => 'icofont-windy-night',
			'icofont icofont-windy-raining' => 'icofont-windy-raining',
			'icofont icofont-windy-sunny' => 'icofont-windy-sunny',
			'icofont icofont-windy-thunder-raining' => 'icofont-windy-thunder-raining',
			'icofont icofont-windy-thunder' => 'icofont-windy-thunder',
			'icofont icofont-windy' => 'icofont-windy',
			'icofont icofont-addons' => 'icofont-addons',
			'icofont icofont-address-book' => 'icofont-address-book',
			'icofont icofont-adjust' => 'icofont-adjust',
			'icofont icofont-alarm' => 'icofont-alarm',
			'icofont icofont-anchor' => 'icofont-anchor',
			'icofont icofont-archive' => 'icofont-archive',
			'icofont icofont-at' => 'icofont-at',
			'icofont icofont-attachment' => 'icofont-attachment',
			'icofont icofont-audio' => 'icofont-audio',
			'icofont icofont-automation' => 'icofont-automation',
			'icofont icofont-badge' => 'icofont-badge',
			'icofont icofont-bag-alt' => 'icofont-bag-alt',
			'icofont icofont-bag' => 'icofont-bag',
			'icofont icofont-ban' => 'icofont-ban',
			'icofont icofont-bar-code' => 'icofont-bar-code',
			'icofont icofont-bars' => 'icofont-bars',
			'icofont icofont-basket' => 'icofont-basket',
			'icofont icofont-battery-empty' => 'icofont-battery-empty',
			'icofont icofont-battery-full' => 'icofont-battery-full',
			'icofont icofont-battery-half' => 'icofont-battery-half',
			'icofont icofont-battery-low' => 'icofont-battery-low',
			'icofont icofont-beaker' => 'icofont-beaker',
			'icofont icofont-beard' => 'icofont-beard',
			'icofont icofont-bed' => 'icofont-bed',
			'icofont icofont-bell' => 'icofont-bell',
			'icofont icofont-beverage' => 'icofont-beverage',
			'icofont icofont-bill' => 'icofont-bill',
			'icofont icofont-bin' => 'icofont-bin',
			'icofont icofont-binary' => 'icofont-binary',
			'icofont icofont-binoculars' => 'icofont-binoculars',
			'icofont icofont-bluetooth' => 'icofont-bluetooth',
			'icofont icofont-bomb' => 'icofont-bomb',
			'icofont icofont-book-mark' => 'icofont-book-mark',
			'icofont icofont-box' => 'icofont-box',
			'icofont icofont-briefcase' => 'icofont-briefcase',
			'icofont icofont-broken' => 'icofont-broken',
			'icofont icofont-bucket' => 'icofont-bucket',
			'icofont icofont-bucket1' => 'icofont-bucket1',
			'icofont icofont-bucket2' => 'icofont-bucket2',
			'icofont icofont-bug' => 'icofont-bug',
			'icofont icofont-building' => 'icofont-building',
			'icofont icofont-bulb-alt' => 'icofont-bulb-alt',
			'icofont icofont-bullet' => 'icofont-bullet',
			'icofont icofont-bullhorn' => 'icofont-bullhorn',
			'icofont icofont-bullseye' => 'icofont-bullseye',
			'icofont icofont-calendar' => 'icofont-calendar',
			'icofont icofont-camera-alt' => 'icofont-camera-alt',
			'icofont icofont-camera' => 'icofont-camera',
			'icofont icofont-card' => 'icofont-card',
			'icofont icofont-cart-alt' => 'icofont-cart-alt',
			'icofont icofont-cart' => 'icofont-cart',
			'icofont icofont-cc' => 'icofont-cc',
			'icofont icofont-charging' => 'icofont-charging',
			'icofont icofont-chat' => 'icofont-chat',
			'icofont icofont-check-alt' => 'icofont-check-alt',
			'icofont icofont-check-circled' => 'icofont-check-circled',
			'icofont icofont-check' => 'icofont-check',
			'icofont icofont-checked' => 'icofont-checked',
			'icofont icofont-children-care' => 'icofont-children-care',
			'icofont icofont-clip' => 'icofont-clip',
			'icofont icofont-clock-time' => 'icofont-clock-time',
			'icofont icofont-close-circled' => 'icofont-close-circled',
			'icofont icofont-close-line-circled' => 'icofont-close-line-circled',
			'icofont icofont-close-line-squared-alt' => 'icofont-close-line-squared-alt',
			'icofont icofont-close-line-squared' => 'icofont-close-line-squared',
			'icofont icofont-close-line' => 'icofont-close-line',
			'icofont icofont-close-squared-alt' => 'icofont-close-squared-alt',
			'icofont icofont-close-squared' => 'icofont-close-squared',
			'icofont icofont-close' => 'icofont-close',
			'icofont icofont-cloud-download' => 'icofont-cloud-download',
			'icofont icofont-cloud-refresh' => 'icofont-cloud-refresh',
			'icofont icofont-cloud-upload' => 'icofont-cloud-upload',
			'icofont icofont-cloud' => 'icofont-cloud',
			'icofont icofont-code-not-allowed' => 'icofont-code-not-allowed',
			'icofont icofont-code' => 'icofont-code',
			'icofont icofont-comment' => 'icofont-comment',
			'icofont icofont-compass-alt' => 'icofont-compass-alt',
			'icofont icofont-compass' => 'icofont-compass',
			'icofont icofont-computer' => 'icofont-computer',
			'icofont icofont-connection' => 'icofont-connection',
			'icofont icofont-console' => 'icofont-console',
			'icofont icofont-contacts' => 'icofont-contacts',
			'icofont icofont-contrast' => 'icofont-contrast',
			'icofont icofont-copyright' => 'icofont-copyright',
			'icofont icofont-credit-card' => 'icofont-credit-card',
			'icofont icofont-crop' => 'icofont-crop',
			'icofont icofont-crown' => 'icofont-crown',
			'icofont icofont-cube' => 'icofont-cube',
			'icofont icofont-cubes' => 'icofont-cubes',
			'icofont icofont-dashboard-web' => 'icofont-dashboard-web',
			'icofont icofont-dashboard' => 'icofont-dashboard',
			'icofont icofont-data' => 'icofont-data',
			'icofont icofont-database-add' => 'icofont-database-add',
			'icofont icofont-database-locked' => 'icofont-database-locked',
			'icofont icofont-database-remove' => 'icofont-database-remove',
			'icofont icofont-database' => 'icofont-database',
			'icofont icofont-delete' => 'icofont-delete',
			'icofont icofont-diamond' => 'icofont-diamond',
			'icofont icofont-dice-multiple' => 'icofont-dice-multiple',
			'icofont icofont-dice' => 'icofont-dice',
			'icofont icofont-disc' => 'icofont-disc',
			'icofont icofont-diskette' => 'icofont-diskette',
			'icofont icofont-document-folder' => 'icofont-document-folder',
			'icofont icofont-download-alt' => 'icofont-download-alt',
			'icofont icofont-download' => 'icofont-download',
			'icofont icofont-downloaded' => 'icofont-downloaded',
			'icofont icofont-drag' => 'icofont-drag',
			'icofont icofont-drag1' => 'icofont-drag1',
			'icofont icofont-drag2' => 'icofont-drag2',
			'icofont icofont-drag3' => 'icofont-drag3',
			'icofont icofont-earth' => 'icofont-earth',
			'icofont icofont-ebook' => 'icofont-ebook',
			'icofont icofont-edit' => 'icofont-edit',
			'icofont icofont-eject' => 'icofont-eject',
			'icofont icofont-email' => 'icofont-email',
			'icofont icofont-envelope-open' => 'icofont-envelope-open',
			'icofont icofont-envelope' => 'icofont-envelope',
			'icofont icofont-eraser' => 'icofont-eraser',
			'icofont icofont-error' => 'icofont-error',
			'icofont icofont-excavator' => 'icofont-excavator',
			'icofont icofont-exchange' => 'icofont-exchange',
			'icofont icofont-exclamation-circle' => 'icofont-exclamation-circle',
			'icofont icofont-exclamation-square' => 'icofont-exclamation-square',
			'icofont icofont-exclamation-tringle' => 'icofont-exclamation-tringle',
			'icofont icofont-exclamation' => 'icofont-exclamation',
			'icofont icofont-exit' => 'icofont-exit',
			'icofont icofont-expand' => 'icofont-expand',
			'icofont icofont-external-link' => 'icofont-external-link',
			'icofont icofont-external' => 'icofont-external',
			'icofont icofont-eye-alt' => 'icofont-eye-alt',
			'icofont icofont-eye-blocked' => 'icofont-eye-blocked',
			'icofont icofont-eye-dropper' => 'icofont-eye-dropper',
			'icofont icofont-eye' => 'icofont-eye',
			'icofont icofont-favourite' => 'icofont-favourite',
			'icofont icofont-fax' => 'icofont-fax',
			'icofont icofont-file-fill' => 'icofont-file-fill',
			'icofont icofont-film' => 'icofont-film',
			'icofont icofont-filter' => 'icofont-filter',
			'icofont icofont-fire-alt' => 'icofont-fire-alt',
			'icofont icofont-fire-burn' => 'icofont-fire-burn',
			'icofont icofont-fire' => 'icofont-fire',
			'icofont icofont-flag-alt-1' => 'icofont-flag-alt-1',
			'icofont icofont-flag-alt-2' => 'icofont-flag-alt-2',
			'icofont icofont-flag' => 'icofont-flag',
			'icofont icofont-flame-torch' => 'icofont-flame-torch',
			'icofont icofont-flash-light' => 'icofont-flash-light',
			'icofont icofont-flash' => 'icofont-flash',
			'icofont icofont-flask' => 'icofont-flask',
			'icofont icofont-focus' => 'icofont-focus',
			'icofont icofont-folder-open' => 'icofont-folder-open',
			'icofont icofont-folder' => 'icofont-folder',
			'icofont icofont-foot-print' => 'icofont-foot-print',
			'icofont icofont-garbage' => 'icofont-garbage',
			'icofont icofont-gear-alt' => 'icofont-gear-alt',
			'icofont icofont-gear' => 'icofont-gear',
			'icofont icofont-gears' => 'icofont-gears',
			'icofont icofont-gift' => 'icofont-gift',
			'icofont icofont-glass' => 'icofont-glass',
			'icofont icofont-globe' => 'icofont-globe',
			'icofont icofont-graffiti' => 'icofont-graffiti',
			'icofont icofont-grocery' => 'icofont-grocery',
			'icofont icofont-hand' => 'icofont-hand',
			'icofont icofont-hanger' => 'icofont-hanger',
			'icofont icofont-hard-disk' => 'icofont-hard-disk',
			'icofont icofont-heart-alt' => 'icofont-heart-alt',
			'icofont icofont-heart' => 'icofont-heart',
			'icofont icofont-history' => 'icofont-history',
			'icofont icofont-home' => 'icofont-home',
			'icofont icofont-horn' => 'icofont-horn',
			'icofont icofont-hour-glass' => 'icofont-hour-glass',
			'icofont icofont-id' => 'icofont-id',
			'icofont icofont-image' => 'icofont-image',
			'icofont icofont-inbox' => 'icofont-inbox',
			'icofont icofont-infinite' => 'icofont-infinite',
			'icofont icofont-info-circle' => 'icofont-info-circle',
			'icofont icofont-info-square' => 'icofont-info-square',
			'icofont icofont-info' => 'icofont-info',
			'icofont icofont-institution' => 'icofont-institution',
			'icofont icofont-interface' => 'icofont-interface',
			'icofont icofont-invisible' => 'icofont-invisible',
			'icofont icofont-jacket' => 'icofont-jacket',
			'icofont icofont-jar' => 'icofont-jar',
			'icofont icofont-jewlery' => 'icofont-jewlery',
			'icofont icofont-karate' => 'icofont-karate',
			'icofont icofont-key-hole' => 'icofont-key-hole',
			'icofont icofont-key' => 'icofont-key',
			'icofont icofont-label' => 'icofont-label',
			'icofont icofont-lamp' => 'icofont-lamp',
			'icofont icofont-layers' => 'icofont-layers',
			'icofont icofont-layout' => 'icofont-layout',
			'icofont icofont-leaf' => 'icofont-leaf',
			'icofont icofont-leaflet' => 'icofont-leaflet',
			'icofont icofont-learn' => 'icofont-learn',
			'icofont icofont-lego' => 'icofont-lego',
			'icofont icofont-lens' => 'icofont-lens',
			'icofont icofont-letter' => 'icofont-letter',
			'icofont icofont-letterbox' => 'icofont-letterbox',
			'icofont icofont-library' => 'icofont-library',
			'icofont icofont-license' => 'icofont-license',
			'icofont icofont-life-bouy' => 'icofont-life-bouy',
			'icofont icofont-life-buoy' => 'icofont-life-buoy',
			'icofont icofont-life-jacket' => 'icofont-life-jacket',
			'icofont icofont-life-ring' => 'icofont-life-ring',
			'icofont icofont-light-bulb' => 'icofont-light-bulb',
			'icofont icofont-lighter' => 'icofont-lighter',
			'icofont icofont-lightning-ray' => 'icofont-lightning-ray',
			'icofont icofont-like' => 'icofont-like',
			'icofont icofont-line-height' => 'icofont-line-height',
			'icofont icofont-link-alt' => 'icofont-link-alt',
			'icofont icofont-link' => 'icofont-link',
			'icofont icofont-list' => 'icofont-list',
			'icofont icofont-listening' => 'icofont-listening',
			'icofont icofont-listine-dots' => 'icofont-listine-dots',
			'icofont icofont-listing-box' => 'icofont-listing-box',
			'icofont icofont-listing-number' => 'icofont-listing-number',
			'icofont icofont-live-support' => 'icofont-live-support',
			'icofont icofont-location-arrow' => 'icofont-location-arrow',
			'icofont icofont-location-pin' => 'icofont-location-pin',
			'icofont icofont-lock' => 'icofont-lock',
			'icofont icofont-login' => 'icofont-login',
			'icofont icofont-logout' => 'icofont-logout',
			'icofont icofont-lollipop' => 'icofont-lollipop',
			'icofont icofont-long-drive' => 'icofont-long-drive',
			'icofont icofont-look' => 'icofont-look',
			'icofont icofont-loop' => 'icofont-loop',
			'icofont icofont-luggage' => 'icofont-luggage',
			'icofont icofont-lunch' => 'icofont-lunch',
			'icofont icofont-lungs' => 'icofont-lungs',
			'icofont icofont-magic-alt' => 'icofont-magic-alt',
			'icofont icofont-magic' => 'icofont-magic',
			'icofont icofont-magnet' => 'icofont-magnet',
			'icofont icofont-mail-box' => 'icofont-mail-box',
			'icofont icofont-mail' => 'icofont-mail',
			'icofont icofont-male' => 'icofont-male',
			'icofont icofont-map-pins' => 'icofont-map-pins',
			'icofont icofont-map' => 'icofont-map',
			'icofont icofont-maximize' => 'icofont-maximize',
			'icofont icofont-measure' => 'icofont-measure',
			'icofont icofont-medicine' => 'icofont-medicine',
			'icofont icofont-mega-phone' => 'icofont-mega-phone',
			'icofont icofont-megaphone-alt' => 'icofont-megaphone-alt',
			'icofont icofont-megaphone' => 'icofont-megaphone',
			'icofont icofont-memorial' => 'icofont-memorial',
			'icofont icofont-memory-card' => 'icofont-memory-card',
			'icofont icofont-mic-mute' => 'icofont-mic-mute',
			'icofont icofont-mic' => 'icofont-mic',
			'icofont icofont-military' => 'icofont-military',
			'icofont icofont-mill' => 'icofont-mill',
			'icofont icofont-minus-circle' => 'icofont-minus-circle',
			'icofont icofont-minus-square' => 'icofont-minus-square',
			'icofont icofont-minus' => 'icofont-minus',
			'icofont icofont-mobile-phone' => 'icofont-mobile-phone',
			'icofont icofont-molecule' => 'icofont-molecule',
			'icofont icofont-money' => 'icofont-money',
			'icofont icofont-moon' => 'icofont-moon',
			'icofont icofont-mop' => 'icofont-mop',
			'icofont icofont-muffin' => 'icofont-muffin',
			'icofont icofont-mustache' => 'icofont-mustache',
			'icofont icofont-navigation-menu' => 'icofont-navigation-menu',
			'icofont icofont-navigation' => 'icofont-navigation',
			'icofont icofont-network-tower' => 'icofont-network-tower',
			'icofont icofont-network' => 'icofont-network',
			'icofont icofont-news' => 'icofont-news',
			'icofont icofont-newspaper' => 'icofont-newspaper',
			'icofont icofont-no-smoking' => 'icofont-no-smoking',
			'icofont icofont-not-allowed' => 'icofont-not-allowed',
			'icofont icofont-notebook' => 'icofont-notebook',
			'icofont icofont-notepad' => 'icofont-notepad',
			'icofont icofont-notification' => 'icofont-notification',
			'icofont icofont-numbered' => 'icofont-numbered',
			'icofont icofont-opposite' => 'icofont-opposite',
			'icofont icofont-optic' => 'icofont-optic',
			'icofont icofont-options' => 'icofont-options',
			'icofont icofont-package' => 'icofont-package',
			'icofont icofont-page' => 'icofont-page',
			'icofont icofont-paint' => 'icofont-paint',
			'icofont icofont-paper-plane' => 'icofont-paper-plane',
			'icofont icofont-paperclip' => 'icofont-paperclip',
			'icofont icofont-papers' => 'icofont-papers',
			'icofont icofont-pay' => 'icofont-pay',
			'icofont icofont-penguin-linux' => 'icofont-penguin-linux',
			'icofont icofont-pestle' => 'icofont-pestle',
			'icofont icofont-phone-circle' => 'icofont-phone-circle',
			'icofont icofont-phone' => 'icofont-phone',
			'icofont icofont-picture' => 'icofont-picture',
			'icofont icofont-pine' => 'icofont-pine',
			'icofont icofont-pixels' => 'icofont-pixels',
			'icofont icofont-plugin' => 'icofont-plugin',
			'icofont icofont-plus-circle' => 'icofont-plus-circle',
			'icofont icofont-plus-square' => 'icofont-plus-square',
			'icofont icofont-plus' => 'icofont-plus',
			'icofont icofont-polygonal' => 'icofont-polygonal',
			'icofont icofont-power' => 'icofont-power',
			'icofont icofont-price' => 'icofont-price',
			'icofont icofont-print' => 'icofont-print',
			'icofont icofont-puzzle' => 'icofont-puzzle',
			'icofont icofont-qr-code' => 'icofont-qr-code',
			'icofont icofont-queen' => 'icofont-queen',
			'icofont icofont-question-circle' => 'icofont-question-circle',
			'icofont icofont-question-square' => 'icofont-question-square',
			'icofont icofont-question' => 'icofont-question',
			'icofont icofont-quote-left' => 'icofont-quote-left',
			'icofont icofont-quote-right' => 'icofont-quote-right',
			'icofont icofont-random' => 'icofont-random',
			'icofont icofont-recycle' => 'icofont-recycle',
			'icofont icofont-refresh' => 'icofont-refresh',
			'icofont icofont-repair' => 'icofont-repair',
			'icofont icofont-reply-all' => 'icofont-reply-all',
			'icofont icofont-reply' => 'icofont-reply',
			'icofont icofont-resize' => 'icofont-resize',
			'icofont icofont-responsive' => 'icofont-responsive',
			'icofont icofont-retweet' => 'icofont-retweet',
			'icofont icofont-road' => 'icofont-road',
			'icofont icofont-robot' => 'icofont-robot',
			'icofont icofont-royal' => 'icofont-royal',
			'icofont icofont-rss-feed' => 'icofont-rss-feed',
			'icofont icofont-safety' => 'icofont-safety',
			'icofont icofont-sale-discount' => 'icofont-sale-discount',
			'icofont icofont-satellite' => 'icofont-satellite',
			'icofont icofont-send-mail' => 'icofont-send-mail',
			'icofont icofont-server' => 'icofont-server',
			'icofont icofont-settings-alt' => 'icofont-settings-alt',
			'icofont icofont-settings' => 'icofont-settings',
			'icofont icofont-share-alt' => 'icofont-share-alt',
			'icofont icofont-share-boxed' => 'icofont-share-boxed',
			'icofont icofont-share' => 'icofont-share',
			'icofont icofont-shield' => 'icofont-shield',
			'icofont icofont-shopping-cart' => 'icofont-shopping-cart',
			'icofont icofont-sign-in' => 'icofont-sign-in',
			'icofont icofont-sign-out' => 'icofont-sign-out',
			'icofont icofont-signal' => 'icofont-signal',
			'icofont icofont-site-map' => 'icofont-site-map',
			'icofont icofont-smart-phone' => 'icofont-smart-phone',
			'icofont icofont-soccer' => 'icofont-soccer',
			'icofont icofont-sort-alt' => 'icofont-sort-alt',
			'icofont icofont-sort' => 'icofont-sort',
			'icofont icofont-space' => 'icofont-space',
			'icofont icofont-spanner' => 'icofont-spanner',
			'icofont icofont-speech-comments' => 'icofont-speech-comments',
			'icofont icofont-speed-meter' => 'icofont-speed-meter',
			'icofont icofont-spinner-alt-1' => 'icofont-spinner-alt-1',
			'icofont icofont-spinner-alt-2' => 'icofont-spinner-alt-2',
			'icofont icofont-spinner-alt-3' => 'icofont-spinner-alt-3',
			'icofont icofont-spinner-alt-4' => 'icofont-spinner-alt-4',
			'icofont icofont-spinner-alt-5' => 'icofont-spinner-alt-5',
			'icofont icofont-spinner-alt-6' => 'icofont-spinner-alt-6',
			'icofont icofont-spinner' => 'icofont-spinner',
			'icofont icofont-spreadsheet' => 'icofont-spreadsheet',
			'icofont icofont-square' => 'icofont-square',
			'icofont icofont-ssl-security' => 'icofont-ssl-security',
			'icofont icofont-star-alt-1' => 'icofont-star-alt-1',
			'icofont icofont-star-alt-2' => 'icofont-star-alt-2',
			'icofont icofont-star' => 'icofont-star',
			'icofont icofont-street-view' => 'icofont-street-view',
			'icofont icofont-support-faq' => 'icofont-support-faq',
			'icofont icofont-tack-pin' => 'icofont-tack-pin',
			'icofont icofont-tag' => 'icofont-tag',
			'icofont icofont-tags' => 'icofont-tags',
			'icofont icofont-tasks-alt' => 'icofont-tasks-alt',
			'icofont icofont-tasks' => 'icofont-tasks',
			'icofont icofont-telephone' => 'icofont-telephone',
			'icofont icofont-telescope' => 'icofont-telescope',
			'icofont icofont-terminal' => 'icofont-terminal',
			'icofont icofont-thumbs-down' => 'icofont-thumbs-down',
			'icofont icofont-thumbs-up' => 'icofont-thumbs-up',
			'icofont icofont-tick-boxed' => 'icofont-tick-boxed',
			'icofont icofont-tick-mark' => 'icofont-tick-mark',
			'icofont icofont-ticket' => 'icofont-ticket',
			'icofont icofont-tie' => 'icofont-tie',
			'icofont icofont-toggle-off' => 'icofont-toggle-off',
			'icofont icofont-toggle-on' => 'icofont-toggle-on',
			'icofont icofont-tools-alt-2' => 'icofont-tools-alt-2',
			'icofont icofont-tools' => 'icofont-tools',
			'icofont icofont-touch' => 'icofont-touch',
			'icofont icofont-traffic-light' => 'icofont-traffic-light',
			'icofont icofont-transparent' => 'icofont-transparent',
			'icofont icofont-tree' => 'icofont-tree',
			'icofont icofont-unique-idea' => 'icofont-unique-idea',
			'icofont icofont-unlock' => 'icofont-unlock',
			'icofont icofont-unlocked' => 'icofont-unlocked',
			'icofont icofont-upload-alt' => 'icofont-upload-alt',
			'icofont icofont-upload' => 'icofont-upload',
			'icofont icofont-usb-drive' => 'icofont-usb-drive',
			'icofont icofont-usb' => 'icofont-usb',
			'icofont icofont-vector-path' => 'icofont-vector-path',
			'icofont icofont-verification-check' => 'icofont-verification-check',
			'icofont icofont-wall-clock' => 'icofont-wall-clock',
			'icofont icofont-wall' => 'icofont-wall',
			'icofont icofont-wallet' => 'icofont-wallet',
			'icofont icofont-warning-alt' => 'icofont-warning-alt',
			'icofont icofont-warning' => 'icofont-warning',
			'icofont icofont-water-drop' => 'icofont-water-drop',
			'icofont icofont-web' => 'icofont-web',
			'icofont icofont-wheelchair' => 'icofont-wheelchair',
			'icofont icofont-wifi-alt' => 'icofont-wifi-alt',
			'icofont icofont-wifi' => 'icofont-wifi',
			'icofont icofont-world' => 'icofont-world',
			'icofont icofont-zigzag' => 'icofont-zigzag',
			'icofont icofont-zipped' => 'icofont-zipped',

			'fa fa-500px' => '500px',
			'fa fa-address-book' => 'address-book',
			'fa fa-address-book-o' => 'address-book-o',
			'fa fa-address-card' => 'address-card',
			'fa fa-address-card-o' => 'address-card-o',
			'fa fa-adjust' => 'adjust',
			'fa fa-adn' => 'adn',
			'fa fa-align-center' => 'align-center',
			'fa fa-align-justify' => 'align-justify',
			'fa fa-align-left' => 'align-left',
			'fa fa-align-right' => 'align-right',
			'fa fa-amazon' => 'amazon',
			'fa fa-ambulance' => 'ambulance',
			'fa fa-american-sign-language-interpreting' => 'american-sign-language-interpreting',
			'fa fa-anchor' => 'anchor',
			'fa fa-android' => 'android',
			'fa fa-angellist' => 'angellist',
			'fa fa-angle-double-down' => 'angle-double-down',
			'fa fa-angle-double-left' => 'angle-double-left',
			'fa fa-angle-double-right' => 'angle-double-right',
			'fa fa-angle-double-up' => 'angle-double-up',
			'fa fa-angle-down' => 'angle-down',
			'fa fa-angle-left' => 'angle-left',
			'fa fa-angle-right' => 'angle-right',
			'fa fa-angle-up' => 'angle-up',
			'fa fa-apple' => 'apple',
			'fa fa-archive' => 'archive',
			'fa fa-area-chart' => 'area-chart',
			'fa fa-arrow-circle-down' => 'arrow-circle-down',
			'fa fa-arrow-circle-left' => 'arrow-circle-left',
			'fa fa-arrow-circle-o-down' => 'arrow-circle-o-down',
			'fa fa-arrow-circle-o-left' => 'arrow-circle-o-left',
			'fa fa-arrow-circle-o-right' => 'arrow-circle-o-right',
			'fa fa-arrow-circle-o-up' => 'arrow-circle-o-up',
			'fa fa-arrow-circle-right' => 'arrow-circle-right',
			'fa fa-arrow-circle-up' => 'arrow-circle-up',
			'fa fa-arrow-down' => 'arrow-down',
			'fa fa-arrow-left' => 'arrow-left',
			'fa fa-arrow-right' => 'arrow-right',
			'fa fa-arrow-up' => 'arrow-up',
			'fa fa-arrows' => 'arrows',
			'fa fa-arrows-alt' => 'arrows-alt',
			'fa fa-arrows-h' => 'arrows-h',
			'fa fa-arrows-v' => 'arrows-v',
			'fa fa-asl-interpreting' => 'asl-interpreting',
			'fa fa-assistive-listening-systems' => 'assistive-listening-systems',
			'fa fa-asterisk' => 'asterisk',
			'fa fa-at' => 'at',
			'fa fa-audio-description' => 'audio-description',
			'fa fa-automobile' => 'automobile',
			'fa fa-backward' => 'backward',
			'fa fa-balance-scale' => 'balance-scale',
			'fa fa-ban' => 'ban',
			'fa fa-bandcamp' => 'bandcamp',
			'fa fa-bank' => 'bank',
			'fa fa-bar-chart' => 'bar-chart',
			'fa fa-bar-chart-o' => 'bar-chart-o',
			'fa fa-barcode' => 'barcode',
			'fa fa-bars' => 'bars',
			'fa fa-bath' => 'bath',
			'fa fa-bathtub' => 'bathtub',
			'fa fa-battery' => 'battery',
			'fa fa-battery-0' => 'battery-0',
			'fa fa-battery-1' => 'battery-1',
			'fa fa-battery-2' => 'battery-2',
			'fa fa-battery-3' => 'battery-3',
			'fa fa-battery-4' => 'battery-4',
			'fa fa-battery-empty' => 'battery-empty',
			'fa fa-battery-full' => 'battery-full',
			'fa fa-battery-half' => 'battery-half',
			'fa fa-battery-quarter' => 'battery-quarter',
			'fa fa-battery-three-quarters' => 'battery-three-quarters',
			'fa fa-bed' => 'bed',
			'fa fa-beer' => 'beer',
			'fa fa-behance' => 'behance',
			'fa fa-behance-square' => 'behance-square',
			'fa fa-bell' => 'bell',
			'fa fa-bell-o' => 'bell-o',
			'fa fa-bell-slash' => 'bell-slash',
			'fa fa-bell-slash-o' => 'bell-slash-o',
			'fa fa-bicycle' => 'bicycle',
			'fa fa-binoculars' => 'binoculars',
			'fa fa-birthday-cake' => 'birthday-cake',
			'fa fa-bitbucket' => 'bitbucket',
			'fa fa-bitbucket-square' => 'bitbucket-square',
			'fa fa-bitcoin' => 'bitcoin',
			'fa fa-black-tie' => 'black-tie',
			'fa fa-blind' => 'blind',
			'fa fa-bluetooth' => 'bluetooth',
			'fa fa-bluetooth-b' => 'bluetooth-b',
			'fa fa-bold' => 'bold',
			'fa fa-bolt' => 'bolt',
			'fa fa-bomb' => 'bomb',
			'fa fa-book' => 'book',
			'fa fa-bookmark' => 'bookmark',
			'fa fa-bookmark-o' => 'bookmark-o',
			'fa fa-braille' => 'braille',
			'fa fa-briefcase' => 'briefcase',
			'fa fa-btc' => 'btc',
			'fa fa-bug' => 'bug',
			'fa fa-building' => 'building',
			'fa fa-building-o' => 'building-o',
			'fa fa-bullhorn' => 'bullhorn',
			'fa fa-bullseye' => 'bullseye',
			'fa fa-bus' => 'bus',
			'fa fa-buysellads' => 'buysellads',
			'fa fa-cab' => 'cab',
			'fa fa-calculator' => 'calculator',
			'fa fa-calendar' => 'calendar',
			'fa fa-calendar-check-o' => 'calendar-check-o',
			'fa fa-calendar-minus-o' => 'calendar-minus-o',
			'fa fa-calendar-o' => 'calendar-o',
			'fa fa-calendar-plus-o' => 'calendar-plus-o',
			'fa fa-calendar-times-o' => 'calendar-times-o',
			'fa fa-camera' => 'camera',
			'fa fa-camera-retro' => 'camera-retro',
			'fa fa-car' => 'car',
			'fa fa-caret-down' => 'caret-down',
			'fa fa-caret-left' => 'caret-left',
			'fa fa-caret-right' => 'caret-right',
			'fa fa-caret-square-o-down' => 'caret-square-o-down',
			'fa fa-caret-square-o-left' => 'caret-square-o-left',
			'fa fa-caret-square-o-right' => 'caret-square-o-right',
			'fa fa-caret-square-o-up' => 'caret-square-o-up',
			'fa fa-caret-up' => 'caret-up',
			'fa fa-cart-arrow-down' => 'cart-arrow-down',
			'fa fa-cart-plus' => 'cart-plus',
			'fa fa-cc' => 'cc',
			'fa fa-cc-amex' => 'cc-amex',
			'fa fa-cc-diners-club' => 'cc-diners-club',
			'fa fa-cc-discover' => 'cc-discover',
			'fa fa-cc-jcb' => 'cc-jcb',
			'fa fa-cc-mastercard' => 'cc-mastercard',
			'fa fa-cc-paypal' => 'cc-paypal',
			'fa fa-cc-stripe' => 'cc-stripe',
			'fa fa-cc-visa' => 'cc-visa',
			'fa fa-certificate' => 'certificate',
			'fa fa-chain' => 'chain',
			'fa fa-chain-broken' => 'chain-broken',
			'fa fa-check' => 'check',
			'fa fa-check-circle' => 'check-circle',
			'fa fa-check-circle-o' => 'check-circle-o',
			'fa fa-check-square' => 'check-square',
			'fa fa-check-square-o' => 'check-square-o',
			'fa fa-chevron-circle-down' => 'chevron-circle-down',
			'fa fa-chevron-circle-left' => 'chevron-circle-left',
			'fa fa-chevron-circle-right' => 'chevron-circle-right',
			'fa fa-chevron-circle-up' => 'chevron-circle-up',
			'fa fa-chevron-down' => 'chevron-down',
			'fa fa-chevron-left' => 'chevron-left',
			'fa fa-chevron-right' => 'chevron-right',
			'fa fa-chevron-up' => 'chevron-up',
			'fa fa-child' => 'child',
			'fa fa-chrome' => 'chrome',
			'fa fa-circle' => 'circle',
			'fa fa-circle-o' => 'circle-o',
			'fa fa-circle-o-notch' => 'circle-o-notch',
			'fa fa-circle-thin' => 'circle-thin',
			'fa fa-clipboard' => 'clipboard',
			'fa fa-clock-o' => 'clock-o',
			'fa fa-clone' => 'clone',
			'fa fa-close' => 'close',
			'fa fa-cloud' => 'cloud',
			'fa fa-cloud-download' => 'cloud-download',
			'fa fa-cloud-upload' => 'cloud-upload',
			'fa fa-cny' => 'cny',
			'fa fa-code' => 'code',
			'fa fa-code-fork' => 'code-fork',
			'fa fa-codepen' => 'codepen',
			'fa fa-codiepie' => 'codiepie',
			'fa fa-coffee' => 'coffee',
			'fa fa-cog' => 'cog',
			'fa fa-cogs' => 'cogs',
			'fa fa-columns' => 'columns',
			'fa fa-comment' => 'comment',
			'fa fa-comment-o' => 'comment-o',
			'fa fa-commenting' => 'commenting',
			'fa fa-commenting-o' => 'commenting-o',
			'fa fa-comments' => 'comments',
			'fa fa-comments-o' => 'comments-o',
			'fa fa-compass' => 'compass',
			'fa fa-compress' => 'compress',
			'fa fa-connectdevelop' => 'connectdevelop',
			'fa fa-contao' => 'contao',
			'fa fa-copy' => 'copy',
			'fa fa-copyright' => 'copyright',
			'fa fa-creative-commons' => 'creative-commons',
			'fa fa-credit-card' => 'credit-card',
			'fa fa-credit-card-alt' => 'credit-card-alt',
			'fa fa-crop' => 'crop',
			'fa fa-crosshairs' => 'crosshairs',
			'fa fa-css3' => 'css3',
			'fa fa-cube' => 'cube',
			'fa fa-cubes' => 'cubes',
			'fa fa-cut' => 'cut',
			'fa fa-cutlery' => 'cutlery',
			'fa fa-dashboard' => 'dashboard',
			'fa fa-dashcube' => 'dashcube',
			'fa fa-database' => 'database',
			'fa fa-deaf' => 'deaf',
			'fa fa-deafness' => 'deafness',
			'fa fa-dedent' => 'dedent',
			'fa fa-delicious' => 'delicious',
			'fa fa-desktop' => 'desktop',
			'fa fa-deviantart' => 'deviantart',
			'fa fa-diamond' => 'diamond',
			'fa fa-digg' => 'digg',
			'fa fa-dollar' => 'dollar',
			'fa fa-dot-circle-o' => 'dot-circle-o',
			'fa fa-download' => 'download',
			'fa fa-dribbble' => 'dribbble',
			'fa fa-drivers-license' => 'drivers-license',
			'fa fa-drivers-license-o' => 'drivers-license-o',
			'fa fa-dropbox' => 'dropbox',
			'fa fa-drupal' => 'drupal',
			'fa fa-edge' => 'edge',
			'fa fa-edit' => 'edit',
			'fa fa-eercast' => 'eercast',
			'fa fa-eject' => 'eject',
			'fa fa-ellipsis-h' => 'ellipsis-h',
			'fa fa-ellipsis-v' => 'ellipsis-v',
			'fa fa-empire' => 'empire',
			'fa fa-envelope' => 'envelope',
			'fa fa-envelope-o' => 'envelope-o',
			'fa fa-envelope-open' => 'envelope-open',
			'fa fa-envelope-open-o' => 'envelope-open-o',
			'fa fa-envelope-square' => 'envelope-square',
			'fa fa-envira' => 'envira',
			'fa fa-eraser' => 'eraser',
			'fa fa-etsy' => 'etsy',
			'fa fa-eur' => 'eur',
			'fa fa-euro' => 'euro',
			'fa fa-exchange' => 'exchange',
			'fa fa-exclamation' => 'exclamation',
			'fa fa-exclamation-circle' => 'exclamation-circle',
			'fa fa-exclamation-triangle' => 'exclamation-triangle',
			'fa fa-expand' => 'expand',
			'fa fa-expeditedssl' => 'expeditedssl',
			'fa fa-external-link' => 'external-link',
			'fa fa-external-link-square' => 'external-link-square',
			'fa fa-eye' => 'eye',
			'fa fa-eye-slash' => 'eye-slash',
			'fa fa-eyedropper' => 'eyedropper',
			'fa fa-fa' => 'fa',
			'fa fa-facebook' => 'facebook',
			'fa fa-facebook-f' => 'facebook-f',
			'fa fa-facebook-official' => 'facebook-official',
			'fa fa-facebook-square' => 'facebook-square',
			'fa fa-fast-backward' => 'fast-backward',
			'fa fa-fast-forward' => 'fast-forward',
			'fa fa-fax' => 'fax',
			'fa fa-feed' => 'feed',
			'fa fa-female' => 'female',
			'fa fa-fighter-jet' => 'fighter-jet',
			'fa fa-file' => 'file',
			'fa fa-file-archive-o' => 'file-archive-o',
			'fa fa-file-audio-o' => 'file-audio-o',
			'fa fa-file-code-o' => 'file-code-o',
			'fa fa-file-excel-o' => 'file-excel-o',
			'fa fa-file-image-o' => 'file-image-o',
			'fa fa-file-movie-o' => 'file-movie-o',
			'fa fa-file-o' => 'file-o',
			'fa fa-file-pdf-o' => 'file-pdf-o',
			'fa fa-file-photo-o' => 'file-photo-o',
			'fa fa-file-picture-o' => 'file-picture-o',
			'fa fa-file-powerpoint-o' => 'file-powerpoint-o',
			'fa fa-file-sound-o' => 'file-sound-o',
			'fa fa-file-text' => 'file-text',
			'fa fa-file-text-o' => 'file-text-o',
			'fa fa-file-video-o' => 'file-video-o',
			'fa fa-file-word-o' => 'file-word-o',
			'fa fa-file-zip-o' => 'file-zip-o',
			'fa fa-files-o' => 'files-o',
			'fa fa-film' => 'film',
			'fa fa-filter' => 'filter',
			'fa fa-fire' => 'fire',
			'fa fa-fire-extinguisher' => 'fire-extinguisher',
			'fa fa-firefox' => 'firefox',
			'fa fa-first-order' => 'first-order',
			'fa fa-flag' => 'flag',
			'fa fa-flag-checkered' => 'flag-checkered',
			'fa fa-flag-o' => 'flag-o',
			'fa fa-flash' => 'flash',
			'fa fa-flask' => 'flask',
			'fa fa-flickr' => 'flickr',
			'fa fa-floppy-o' => 'floppy-o',
			'fa fa-folder' => 'folder',
			'fa fa-folder-o' => 'folder-o',
			'fa fa-folder-open' => 'folder-open',
			'fa fa-folder-open-o' => 'folder-open-o',
			'fa fa-font' => 'font',
			'fa fa-font-awesome' => 'font-awesome',
			'fa fa-fonticons' => 'fonticons',
			'fa fa-fort-awesome' => 'fort-awesome',
			'fa fa-forumbee' => 'forumbee',
			'fa fa-forward' => 'forward',
			'fa fa-foursquare' => 'foursquare',
			'fa fa-free-code-camp' => 'free-code-camp',
			'fa fa-frown-o' => 'frown-o',
			'fa fa-futbol-o' => 'futbol-o',
			'fa fa-gamepad' => 'gamepad',
			'fa fa-gavel' => 'gavel',
			'fa fa-gbp' => 'gbp',
			'fa fa-ge' => 'ge',
			'fa fa-gear' => 'gear',
			'fa fa-gears' => 'gears',
			'fa fa-genderless' => 'genderless',
			'fa fa-get-pocket' => 'get-pocket',
			'fa fa-gg' => 'gg',
			'fa fa-gg-circle' => 'gg-circle',
			'fa fa-gift' => 'gift',
			'fa fa-git' => 'git',
			'fa fa-git-square' => 'git-square',
			'fa fa-github' => 'github',
			'fa fa-github-alt' => 'github-alt',
			'fa fa-github-square' => 'github-square',
			'fa fa-gitlab' => 'gitlab',
			'fa fa-gittip' => 'gittip',
			'fa fa-glass' => 'glass',
			'fa fa-glide' => 'glide',
			'fa fa-glide-g' => 'glide-g',
			'fa fa-globe' => 'globe',
			'fa fa-google' => 'google',
			'fa fa-google-plus' => 'google-plus',
			'fa fa-google-plus-circle' => 'google-plus-circle',
			'fa fa-google-plus-official' => 'google-plus-official',
			'fa fa-google-plus-square' => 'google-plus-square',
			'fa fa-google-wallet' => 'google-wallet',
			'fa fa-graduation-cap' => 'graduation-cap',
			'fa fa-gratipay' => 'gratipay',
			'fa fa-grav' => 'grav',
			'fa fa-group' => 'group',
			'fa fa-h-square' => 'h-square',
			'fa fa-hacker-news' => 'hacker-news',
			'fa fa-hand-grab-o' => 'hand-grab-o',
			'fa fa-hand-lizard-o' => 'hand-lizard-o',
			'fa fa-hand-o-down' => 'hand-o-down',
			'fa fa-hand-o-left' => 'hand-o-left',
			'fa fa-hand-o-right' => 'hand-o-right',
			'fa fa-hand-o-up' => 'hand-o-up',
			'fa fa-hand-paper-o' => 'hand-paper-o',
			'fa fa-hand-peace-o' => 'hand-peace-o',
			'fa fa-hand-pointer-o' => 'hand-pointer-o',
			'fa fa-hand-rock-o' => 'hand-rock-o',
			'fa fa-hand-scissors-o' => 'hand-scissors-o',
			'fa fa-hand-spock-o' => 'hand-spock-o',
			'fa fa-hand-stop-o' => 'hand-stop-o',
			'fa fa-handshake-o' => 'handshake-o',
			'fa fa-hard-of-hearing' => 'hard-of-hearing',
			'fa fa-hashtag' => 'hashtag',
			'fa fa-hdd-o' => 'hdd-o',
			'fa fa-header' => 'header',
			'fa fa-headphones' => 'headphones',
			'fa fa-heart' => 'heart',
			'fa fa-heart-o' => 'heart-o',
			'fa fa-heartbeat' => 'heartbeat',
			'fa fa-history' => 'history',
			'fa fa-home' => 'home',
			'fa fa-hospital-o' => 'hospital-o',
			'fa fa-hotel' => 'hotel',
			'fa fa-hourglass' => 'hourglass',
			'fa fa-hourglass-1' => 'hourglass-1',
			'fa fa-hourglass-2' => 'hourglass-2',
			'fa fa-hourglass-3' => 'hourglass-3',
			'fa fa-hourglass-end' => 'hourglass-end',
			'fa fa-hourglass-half' => 'hourglass-half',
			'fa fa-hourglass-o' => 'hourglass-o',
			'fa fa-hourglass-start' => 'hourglass-start',
			'fa fa-houzz' => 'houzz',
			'fa fa-html5' => 'html5',
			'fa fa-i-cursor' => 'i-cursor',
			'fa fa-id-badge' => 'id-badge',
			'fa fa-id-card' => 'id-card',
			'fa fa-id-card-o' => 'id-card-o',
			'fa fa-ils' => 'ils',
			'fa fa-image' => 'image',
			'fa fa-imdb' => 'imdb',
			'fa fa-inbox' => 'inbox',
			'fa fa-indent' => 'indent',
			'fa fa-industry' => 'industry',
			'fa fa-info' => 'info',
			'fa fa-info-circle' => 'info-circle',
			'fa fa-inr' => 'inr',
			'fa fa-instagram' => 'instagram',
			'fa fa-institution' => 'institution',
			'fa fa-internet-explorer' => 'internet-explorer',
			'fa fa-intersex' => 'intersex',
			'fa fa-ioxhost' => 'ioxhost',
			'fa fa-italic' => 'italic',
			'fa fa-joomla' => 'joomla',
			'fa fa-jpy' => 'jpy',
			'fa fa-jsfiddle' => 'jsfiddle',
			'fa fa-key' => 'key',
			'fa fa-keyboard-o' => 'keyboard-o',
			'fa fa-krw' => 'krw',
			'fa fa-language' => 'language',
			'fa fa-laptop' => 'laptop',
			'fa fa-lastfm' => 'lastfm',
			'fa fa-lastfm-square' => 'lastfm-square',
			'fa fa-leaf' => 'leaf',
			'fa fa-leanpub' => 'leanpub',
			'fa fa-legal' => 'legal',
			'fa fa-lemon-o' => 'lemon-o',
			'fa fa-level-down' => 'level-down',
			'fa fa-level-up' => 'level-up',
			'fa fa-life-bouy' => 'life-bouy',
			'fa fa-life-buoy' => 'life-buoy',
			'fa fa-life-ring' => 'life-ring',
			'fa fa-life-saver' => 'life-saver',
			'fa fa-lightbulb-o' => 'lightbulb-o',
			'fa fa-line-chart' => 'line-chart',
			'fa fa-link' => 'link',
			'fa fa-linkedin' => 'linkedin',
			'fa fa-linkedin-square' => 'linkedin-square',
			'fa fa-linode' => 'linode',
			'fa fa-linux' => 'linux',
			'fa fa-list' => 'list',
			'fa fa-list-alt' => 'list-alt',
			'fa fa-list-ol' => 'list-ol',
			'fa fa-list-ul' => 'list-ul',
			'fa fa-location-arrow' => 'location-arrow',
			'fa fa-lock' => 'lock',
			'fa fa-long-arrow-down' => 'long-arrow-down',
			'fa fa-long-arrow-left' => 'long-arrow-left',
			'fa fa-long-arrow-right' => 'long-arrow-right',
			'fa fa-long-arrow-up' => 'long-arrow-up',
			'fa fa-low-vision' => 'low-vision',
			'fa fa-magic' => 'magic',
			'fa fa-magnet' => 'magnet',
			'fa fa-mail-forward' => 'mail-forward',
			'fa fa-mail-reply' => 'mail-reply',
			'fa fa-mail-reply-all' => 'mail-reply-all',
			'fa fa-male' => 'male',
			'fa fa-map' => 'map',
			'fa fa-map-marker' => 'map-marker',
			'fa fa-map-o' => 'map-o',
			'fa fa-map-pin' => 'map-pin',
			'fa fa-map-signs' => 'map-signs',
			'fa fa-mars' => 'mars',
			'fa fa-mars-double' => 'mars-double',
			'fa fa-mars-stroke' => 'mars-stroke',
			'fa fa-mars-stroke-h' => 'mars-stroke-h',
			'fa fa-mars-stroke-v' => 'mars-stroke-v',
			'fa fa-maxcdn' => 'maxcdn',
			'fa fa-meanpath' => 'meanpath',
			'fa fa-medium' => 'medium',
			'fa fa-medkit' => 'medkit',
			'fa fa-meetup' => 'meetup',
			'fa fa-meh-o' => 'meh-o',
			'fa fa-mercury' => 'mercury',
			'fa fa-microchip' => 'microchip',
			'fa fa-microphone' => 'microphone',
			'fa fa-microphone-slash' => 'microphone-slash',
			'fa fa-minus' => 'minus',
			'fa fa-minus-circle' => 'minus-circle',
			'fa fa-minus-square' => 'minus-square',
			'fa fa-minus-square-o' => 'minus-square-o',
			'fa fa-mixcloud' => 'mixcloud',
			'fa fa-mobile' => 'mobile',
			'fa fa-mobile-phone' => 'mobile-phone',
			'fa fa-modx' => 'modx',
			'fa fa-money' => 'money',
			'fa fa-moon-o' => 'moon-o',
			'fa fa-mortar-board' => 'mortar-board',
			'fa fa-motorcycle' => 'motorcycle',
			'fa fa-mouse-pointer' => 'mouse-pointer',
			'fa fa-music' => 'music',
			'fa fa-navicon' => 'navicon',
			'fa fa-neuter' => 'neuter',
			'fa fa-newspaper-o' => 'newspaper-o',
			'fa fa-object-group' => 'object-group',
			'fa fa-object-ungroup' => 'object-ungroup',
			'fa fa-odnoklassniki' => 'odnoklassniki',
			'fa fa-odnoklassniki-square' => 'odnoklassniki-square',
			'fa fa-opencart' => 'opencart',
			'fa fa-openid' => 'openid',
			'fa fa-opera' => 'opera',
			'fa fa-optin-monster' => 'optin-monster',
			'fa fa-outdent' => 'outdent',
			'fa fa-pagelines' => 'pagelines',
			'fa fa-paint-brush' => 'paint-brush',
			'fa fa-paper-plane' => 'paper-plane',
			'fa fa-paper-plane-o' => 'paper-plane-o',
			'fa fa-paperclip' => 'paperclip',
			'fa fa-paragraph' => 'paragraph',
			'fa fa-paste' => 'paste',
			'fa fa-pause' => 'pause',
			'fa fa-pause-circle' => 'pause-circle',
			'fa fa-pause-circle-o' => 'pause-circle-o',
			'fa fa-paw' => 'paw',
			'fa fa-paypal' => 'paypal',
			'fa fa-pencil' => 'pencil',
			'fa fa-pencil-square' => 'pencil-square',
			'fa fa-pencil-square-o' => 'pencil-square-o',
			'fa fa-percent' => 'percent',
			'fa fa-phone' => 'phone',
			'fa fa-phone-square' => 'phone-square',
			'fa fa-photo' => 'photo',
			'fa fa-picture-o' => 'picture-o',
			'fa fa-pie-chart' => 'pie-chart',
			'fa fa-pied-piper' => 'pied-piper',
			'fa fa-pied-piper-alt' => 'pied-piper-alt',
			'fa fa-pied-piper-pp' => 'pied-piper-pp',
			'fa fa-pinterest' => 'pinterest',
			'fa fa-pinterest-p' => 'pinterest-p',
			'fa fa-pinterest-square' => 'pinterest-square',
			'fa fa-plane' => 'plane',
			'fa fa-play' => 'play',
			'fa fa-play-circle' => 'play-circle',
			'fa fa-play-circle-o' => 'play-circle-o',
			'fa fa-plug' => 'plug',
			'fa fa-plus' => 'plus',
			'fa fa-plus-circle' => 'plus-circle',
			'fa fa-plus-square' => 'plus-square',
			'fa fa-plus-square-o' => 'plus-square-o',
			'fa fa-podcast' => 'podcast',
			'fa fa-power-off' => 'power-off',
			'fa fa-print' => 'print',
			'fa fa-product-hunt' => 'product-hunt',
			'fa fa-pull-left' => 'pull-left',
			'fa fa-pull-right' => 'pull-right',
			'fa fa-puzzle-piece' => 'puzzle-piece',
			'fa fa-qq' => 'qq',
			'fa fa-qrcode' => 'qrcode',
			'fa fa-question' => 'question',
			'fa fa-question-circle' => 'question-circle',
			'fa fa-question-circle-o' => 'question-circle-o',
			'fa fa-quora' => 'quora',
			'fa fa-quote-left' => 'quote-left',
			'fa fa-quote-right' => 'quote-right',
			'fa fa-ra' => 'ra',
			'fa fa-random' => 'random',
			'fa fa-ravelry' => 'ravelry',
			'fa fa-rebel' => 'rebel',
			'fa fa-recycle' => 'recycle',
			'fa fa-reddit' => 'reddit',
			'fa fa-reddit-alien' => 'reddit-alien',
			'fa fa-reddit-square' => 'reddit-square',
			'fa fa-refresh' => 'refresh',
			'fa fa-registered' => 'registered',
			'fa fa-remove' => 'remove',
			'fa fa-renren' => 'renren',
			'fa fa-reorder' => 'reorder',
			'fa fa-repeat' => 'repeat',
			'fa fa-reply' => 'reply',
			'fa fa-reply-all' => 'reply-all',
			'fa fa-resistance' => 'resistance',
			'fa fa-retweet' => 'retweet',
			'fa fa-rmb' => 'rmb',
			'fa fa-road' => 'road',
			'fa fa-rocket' => 'rocket',
			'fa fa-rotate-left' => 'rotate-left',
			'fa fa-rotate-right' => 'rotate-right',
			'fa fa-rouble' => 'rouble',
			'fa fa-rss' => 'rss',
			'fa fa-rss-square' => 'rss-square',
			'fa fa-rub' => 'rub',
			'fa fa-ruble' => 'ruble',
			'fa fa-rupee' => 'rupee',
			'fa fa-s15' => 's15',
			'fa fa-safari' => 'safari',
			'fa fa-save' => 'save',
			'fa fa-scissors' => 'scissors',
			'fa fa-scribd' => 'scribd',
			'fa fa-search' => 'search',
			'fa fa-search-minus' => 'search-minus',
			'fa fa-search-plus' => 'search-plus',
			'fa fa-sellsy' => 'sellsy',
			'fa fa-send' => 'send',
			'fa fa-send-o' => 'send-o',
			'fa fa-server' => 'server',
			'fa fa-share' => 'share',
			'fa fa-share-alt' => 'share-alt',
			'fa fa-share-alt-square' => 'share-alt-square',
			'fa fa-share-square' => 'share-square',
			'fa fa-share-square-o' => 'share-square-o',
			'fa fa-shekel' => 'shekel',
			'fa fa-sheqel' => 'sheqel',
			'fa fa-shield' => 'shield',
			'fa fa-ship' => 'ship',
			'fa fa-shirtsinbulk' => 'shirtsinbulk',
			'fa fa-shopping-bag' => 'shopping-bag',
			'fa fa-shopping-basket' => 'shopping-basket',
			'fa fa-shopping-cart' => 'shopping-cart',
			'fa fa-shower' => 'shower',
			'fa fa-sign-in' => 'sign-in',
			'fa fa-sign-language' => 'sign-language',
			'fa fa-sign-out' => 'sign-out',
			'fa fa-signal' => 'signal',
			'fa fa-signing' => 'signing',
			'fa fa-simplybuilt' => 'simplybuilt',
			'fa fa-sitemap' => 'sitemap',
			'fa fa-skyatlas' => 'skyatlas',
			'fa fa-skype' => 'skype',
			'fa fa-slack' => 'slack',
			'fa fa-sliders' => 'sliders',
			'fa fa-slideshare' => 'slideshare',
			'fa fa-smile-o' => 'smile-o',
			'fa fa-snapchat' => 'snapchat',
			'fa fa-snapchat-ghost' => 'snapchat-ghost',
			'fa fa-snapchat-square' => 'snapchat-square',
			'fa fa-snowflake-o' => 'snowflake-o',
			'fa fa-soccer-ball-o' => 'soccer-ball-o',
			'fa fa-sort' => 'sort',
			'fa fa-sort-alpha-asc' => 'sort-alpha-asc',
			'fa fa-sort-alpha-desc' => 'sort-alpha-desc',
			'fa fa-sort-amount-asc' => 'sort-amount-asc',
			'fa fa-sort-amount-desc' => 'sort-amount-desc',
			'fa fa-sort-asc' => 'sort-asc',
			'fa fa-sort-desc' => 'sort-desc',
			'fa fa-sort-down' => 'sort-down',
			'fa fa-sort-numeric-asc' => 'sort-numeric-asc',
			'fa fa-sort-numeric-desc' => 'sort-numeric-desc',
			'fa fa-sort-up' => 'sort-up',
			'fa fa-soundcloud' => 'soundcloud',
			'fa fa-space-shuttle' => 'space-shuttle',
			'fa fa-spinner' => 'spinner',
			'fa fa-spoon' => 'spoon',
			'fa fa-spotify' => 'spotify',
			'fa fa-square' => 'square',
			'fa fa-square-o' => 'square-o',
			'fa fa-stack-exchange' => 'stack-exchange',
			'fa fa-stack-overflow' => 'stack-overflow',
			'fa fa-star' => 'star',
			'fa fa-star-half' => 'star-half',
			'fa fa-star-half-empty' => 'star-half-empty',
			'fa fa-star-half-full' => 'star-half-full',
			'fa fa-star-half-o' => 'star-half-o',
			'fa fa-star-o' => 'star-o',
			'fa fa-steam' => 'steam',
			'fa fa-steam-square' => 'steam-square',
			'fa fa-step-backward' => 'step-backward',
			'fa fa-step-forward' => 'step-forward',
			'fa fa-stethoscope' => 'stethoscope',
			'fa fa-sticky-note' => 'sticky-note',
			'fa fa-sticky-note-o' => 'sticky-note-o',
			'fa fa-stop' => 'stop',
			'fa fa-stop-circle' => 'stop-circle',
			'fa fa-stop-circle-o' => 'stop-circle-o',
			'fa fa-street-view' => 'street-view',
			'fa fa-strikethrough' => 'strikethrough',
			'fa fa-stumbleupon' => 'stumbleupon',
			'fa fa-stumbleupon-circle' => 'stumbleupon-circle',
			'fa fa-subscript' => 'subscript',
			'fa fa-subway' => 'subway',
			'fa fa-suitcase' => 'suitcase',
			'fa fa-sun-o' => 'sun-o',
			'fa fa-superpowers' => 'superpowers',
			'fa fa-superscript' => 'superscript',
			'fa fa-support' => 'support',
			'fa fa-table' => 'table',
			'fa fa-tablet' => 'tablet',
			'fa fa-tachometer' => 'tachometer',
			'fa fa-tag' => 'tag',
			'fa fa-tags' => 'tags',
			'fa fa-tasks' => 'tasks',
			'fa fa-taxi' => 'taxi',
			'fa fa-telegram' => 'telegram',
			'fa fa-television' => 'television',
			'fa fa-tencent-weibo' => 'tencent-weibo',
			'fa fa-terminal' => 'terminal',
			'fa fa-text-height' => 'text-height',
			'fa fa-text-width' => 'text-width',
			'fa fa-th' => 'th',
			'fa fa-th-large' => 'th-large',
			'fa fa-th-list' => 'th-list',
			'fa fa-themeisle' => 'themeisle',
			'fa fa-thermometer' => 'thermometer',
			'fa fa-thermometer-0' => 'thermometer-0',
			'fa fa-thermometer-1' => 'thermometer-1',
			'fa fa-thermometer-2' => 'thermometer-2',
			'fa fa-thermometer-3' => 'thermometer-3',
			'fa fa-thermometer-4' => 'thermometer-4',
			'fa fa-thermometer-empty' => 'thermometer-empty',
			'fa fa-thermometer-full' => 'thermometer-full',
			'fa fa-thermometer-half' => 'thermometer-half',
			'fa fa-thermometer-quarter' => 'thermometer-quarter',
			'fa fa-thermometer-three-quarters' => 'thermometer-three-quarters',
			'fa fa-thumb-tack' => 'thumb-tack',
			'fa fa-thumbs-down' => 'thumbs-down',
			'fa fa-thumbs-o-down' => 'thumbs-o-down',
			'fa fa-thumbs-o-up' => 'thumbs-o-up',
			'fa fa-thumbs-up' => 'thumbs-up',
			'fa fa-ticket' => 'ticket',
			'fa fa-times' => 'times',
			'fa fa-times-circle' => 'times-circle',
			'fa fa-times-circle-o' => 'times-circle-o',
			'fa fa-times-rectangle' => 'times-rectangle',
			'fa fa-times-rectangle-o' => 'times-rectangle-o',
			'fa fa-tint' => 'tint',
			'fa fa-toggle-down' => 'toggle-down',
			'fa fa-toggle-left' => 'toggle-left',
			'fa fa-toggle-off' => 'toggle-off',
			'fa fa-toggle-on' => 'toggle-on',
			'fa fa-toggle-right' => 'toggle-right',
			'fa fa-toggle-up' => 'toggle-up',
			'fa fa-trademark' => 'trademark',
			'fa fa-train' => 'train',
			'fa fa-transgender' => 'transgender',
			'fa fa-transgender-alt' => 'transgender-alt',
			'fa fa-trash' => 'trash',
			'fa fa-trash-o' => 'trash-o',
			'fa fa-tree' => 'tree',
			'fa fa-trello' => 'trello',
			'fa fa-tripadvisor' => 'tripadvisor',
			'fa fa-trophy' => 'trophy',
			'fa fa-truck' => 'truck',
			'fa fa-try' => 'try',
			'fa fa-tty' => 'tty',
			'fa fa-tumblr' => 'tumblr',
			'fa fa-tumblr-square' => 'tumblr-square',
			'fa fa-turkish-lira' => 'turkish-lira',
			'fa fa-tv' => 'tv',
			'fa fa-twitch' => 'twitch',
			'fa fa-twitter' => 'twitter',
			'fa fa-twitter-square' => 'twitter-square',
			'fa fa-umbrella' => 'umbrella',
			'fa fa-underline' => 'underline',
			'fa fa-undo' => 'undo',
			'fa fa-universal-access' => 'universal-access',
			'fa fa-university' => 'university',
			'fa fa-unlink' => 'unlink',
			'fa fa-unlock' => 'unlock',
			'fa fa-unlock-alt' => 'unlock-alt',
			'fa fa-unsorted' => 'unsorted',
			'fa fa-upload' => 'upload',
			'fa fa-usb' => 'usb',
			'fa fa-usd' => 'usd',
			'fa fa-user' => 'user',
			'fa fa-user-circle' => 'user-circle',
			'fa fa-user-circle-o' => 'user-circle-o',
			'fa fa-user-md' => 'user-md',
			'fa fa-user-o' => 'user-o',
			'fa fa-user-plus' => 'user-plus',
			'fa fa-user-secret' => 'user-secret',
			'fa fa-user-times' => 'user-times',
			'fa fa-users' => 'users',
			'fa fa-vcard' => 'vcard',
			'fa fa-vcard-o' => 'vcard-o',
			'fa fa-venus' => 'venus',
			'fa fa-venus-double' => 'venus-double',
			'fa fa-venus-mars' => 'venus-mars',
			'fa fa-viacoin' => 'viacoin',
			'fa fa-viadeo' => 'viadeo',
			'fa fa-viadeo-square' => 'viadeo-square',
			'fa fa-video-camera' => 'video-camera',
			'fa fa-vimeo' => 'vimeo',
			'fa fa-vimeo-square' => 'vimeo-square',
			'fa fa-vine' => 'vine',
			'fa fa-vk' => 'vk',
			'fa fa-volume-control-phone' => 'volume-control-phone',
			'fa fa-volume-down' => 'volume-down',
			'fa fa-volume-off' => 'volume-off',
			'fa fa-volume-up' => 'volume-up',
			'fa fa-warning' => 'warning',
			'fa fa-wechat' => 'wechat',
			'fa fa-weibo' => 'weibo',
			'fa fa-weixin' => 'weixin',
			'fa fa-whatsapp' => 'whatsapp',
			'fa fa-wheelchair' => 'wheelchair',
			'fa fa-wheelchair-alt' => 'wheelchair-alt',
			'fa fa-wifi' => 'wifi',
			'fa fa-wikipedia-w' => 'wikipedia-w',
			'fa fa-window-close' => 'window-close',
			'fa fa-window-close-o' => 'window-close-o',
			'fa fa-window-maximize' => 'window-maximize',
			'fa fa-window-minimize' => 'window-minimize',
			'fa fa-window-restore' => 'window-restore',
			'fa fa-windows' => 'windows',
			'fa fa-won' => 'won',
			'fa fa-wordpress' => 'wordpress',
			'fa fa-wpbeginner' => 'wpbeginner',
			'fa fa-wpexplorer' => 'wpexplorer',
			'fa fa-wpforms' => 'wpforms',
			'fa fa-wrench' => 'wrench',
			'fa fa-xing' => 'xing',
			'fa fa-xing-square' => 'xing-square',
			'fa fa-y-combinator' => 'y-combinator',
			'fa fa-y-combinator-square' => 'y-combinator-square',
			'fa fa-yahoo' => 'yahoo',
			'fa fa-yc' => 'yc',
			'fa fa-yc-square' => 'yc-square',
			'fa fa-yelp' => 'yelp',
			'fa fa-yen' => 'yen',
			'fa fa-yoast' => 'yoast',
			'fa fa-youtube' => 'youtube',
			'fa fa-youtube-play' => 'youtube-play',
			'fa fa-youtube-square' => 'youtube-square',

			'eicon-arrow-down' => 'eicon-arrow-down',
			'eicon-accordion' => 'eicon-accordion',
			'eicon-icon-box' => 'eicon-icon-box',
			'eicon-counter' => 'eicon-counter',
			'eicon-button' => 'eicon-button',
			'eicon-animation-text' => 'eicon-animation-text',
			'eicon-flip-box' => 'eicon-flip-box',
			'eicon-google-maps' => 'eicon-google-maps',
			'eicon-counter-circle' => 'eicon-counter-circle',
			'eicon-price-table' => 'eicon-price-table',
			'eicon-skill-bar' => 'eicon-skill-bar',
			'eicon-social-icons' => 'eicon-social-icons',
			'eicon-table' => 'eicon-table',
			'eicon-person' => 'eicon-person',
			'eicon-font' => 'eicon-font',
			'eicon-exchange' => 'eicon-exchange',
			'eicon-number-field' => 'eicon-number-field',
			'eicon-play' => 'eicon-play',
			'eicon-eye' => 'eicon-eye',
			'eicon-preview-medium' => 'eicon-preview-medium',
			'eicon-zoom-in' => 'eicon-zoom-in',
			'eicon-testimonial' => 'eicon-testimonial',
			'eicon-search' => 'eicon-search',
			'eicon-editor-external-link' => 'eicon-editor-external-link',
			'eicon-slider-push' => 'eicon-slider-push',
			'eicon-pencil' => 'eicon-pencil',
			'eicon-t-letter' => 'eicon-t-letter',
			'eicon-gallery-justified' => 'eicon-gallery-justified',
			'eicon-edit' => 'eicon-edit',
			'eicon-carousel' => 'eicon-carousel',
			'eicon-mail' => 'eicon-mail',
			'eicon-post-slider' => 'eicon-post-slider',
			'eicon-clock-o' => 'eicon-clock-o',
			'eicon-call-to-action' => 'eicon-call-to-action',
			'eicon-archive-title' => 'eicon-archive-title',
			'eicon-type-tool' => 'eicon-type-tool',
			'eicon-parallax' => 'eicon-parallax',
			'eicon-gallery-grid' => 'eicon-gallery-grid',
			'eicon-posts-carousel' => 'eicon-posts-carousel',
			'eicon-image-before-after' => 'eicon-image-before-after',

			'eicon-post-navigation' => 'eicon-post-navigation',
			'eicon-testimonial-carousel' => 'eicon-testimonial-carousel',
			'eicon-tabs' => 'eicon-tabs',
			'eicon-ellipsis-v' => 'eicon-ellipsis-v',
			'eicon-form-horizontal' => 'eicon-form-horizontal',
			'eicon-sidebar' => 'eicon-sidebar',
			'eicon-image-rollover' => 'eicon-image-rollover',
			'eicon-featured-image' => 'eicon-featured-image',
			'eicon-info-box' => 'eicon-info-box',
			'eicon-editor-code' => 'eicon-editor-code',
			'eicon-tv' => 'eicon-tv',
			'eicon-facebook-comments' => 'eicon-facebook-comments',
			'eicon-twitter-feed' => 'eicon-twitter-feed',
			'eicon-slider-device' => 'eicon-slider-device',
			'eicon-animation' => 'eicon-animation',
			'eicon-spinner' => 'eicon-spinner',
		];
	}

	/**
	 * Get icons control default settings.
	 *
	 * Retrieve the default settings of the icons control. Used to return the default
	 * settings while initializing the icons control.
	 *
	 * @since 3.0.1
	 * @access protected
	 *
	 * @return array Control default settings.
	 */
	protected function get_default_settings() {
		return [
			'options' => self::get_icons(),
			'include' => '',
			'exclude' => '',
		];
	}

	/**
	 * Render icons control output in the editor.
	 *
	 * Used to generate the control HTML in the editor using Underscore JS
	 * template. The variables for the class are available using `data` JS
	 * object.
	 *
	 * @since 3.0.1
	 * @access public
	 */
	public function content_template() {
		$control_uid = $this->get_control_uid();
		?>
		<div class="elementor-control-field">
			<label for="<?php echo $control_uid; ?>" class="elementor-control-title">{{{ data.label }}}</label>
			<div class="elementor-control-input-wrapper">
				<select id="<?php echo $control_uid; ?>" class="elementor-control-icon" data-setting="{{ data.name }}" data-placeholder="<?php echo __( 'Select Icon', 'sina-ext' ); ?>">
					<option value=""><?php echo __( 'Select Icon', 'sina-ext' ); ?></option>
					<# _.each( data.options, function( option_title, option_value ) { #>
					<option value="{{ option_value }}">{{{ option_title }}}</option>
					<# } ); #>
				</select>
			</div>
		</div>
		<# if ( data.description ) { #>
		<div class="elementor-control-field-description">{{ data.description }}</div>
		<# } #>
		<?php
	}
}
