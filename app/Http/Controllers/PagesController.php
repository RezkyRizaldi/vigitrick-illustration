<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		$data_gallery = [
			[
				"data_item" => "category1",
				"title" => "APEX Overlay",
				"category" => "Category 1",
			],
			[
				"data_item" => "category2",
				"title" => "Collab Teaser ft. Kilanpowa",
				"category" => "Category 2",
			],
			[
				"data_item" => "category3",
				"title" => "Desta Haldmaan Graffiti",
				"category" => "Category 3",
			],
			[
				"data_item" => "category4",
				"title" => "Dezxym Commission",
				"category" => "Category 4",
			],
			[
				"data_item" => "category5",
				"title" => "Dreamer Rii Commission",
				"category" => "Category 5",
			],
			[
				"data_item" => "category1",
				"title" => "Emmi Zaelith Commission",
				"category" => "Category 1",
			],
			[
				"data_item" => "category2",
				"title" => "Erina Mochi Graffiti + Background (no glasses)",
				"category" => "Category 2",
			],
			[
				"data_item" => "category3",
				"title" => "Gumi Commission",
				"category" => "Category 3",
			],
			[
				"data_item" => "category4",
				"title" => "Kamu Ganteng Today",
				"category" => "Category 4",
			],
			[
				"data_item" => "category5",
				"title" => "Kaze Bonus Design",
				"category" => "Category 5",
			],
			[
				"data_item" => "category1",
				"title" => "Kumi 5 Art Raffle",
				"category" => "Category 1",
			],
			[
				"data_item" => "category2",
				"title" => "Matcha + Graffiti Background",
				"category" => "Category 2",
			],
			[
				"data_item" => "category3",
				"title" => "MifanMara",
				"category" => "Category 3",
			],
			[
				"data_item" => "category4",
				"title" => "Mufft Swiftpath Commission",
				"category" => "Category 4",
			],
			[
				"data_item" => "category5",
				"title" => "Nekuma Commission",
				"category" => "Category 5",
			],
			[
				"data_item" => "category1",
				"title" => "Olivia Commission",
				"category" => "Category 1",
			],
			[
				"data_item" => "category2",
				"title" => "Onigiri Comission",
				"category" => "Category 2",
			],
			[
				"data_item" => "category3",
				"title" => "Rakun Illustration",
				"category" => "Category 3",
			],
			[
				"data_item" => "category4",
				"title" => "Reina Commission",
				"category" => "Category 4",
			],
			[
				"data_item" => "category5",
				"title" => "RekaGantenk + Graffiti",
				"category" => "Category 5",
			],
			[
				"data_item" => "category1",
				"title" => "Ryuuki Tatsuya Final",
				"category" => "Category 1",
			],
			[
				"data_item" => "category2",
				"title" => "Serena Shinju Fanart",
				"category" => "Category 2",
			],
			[
				"data_item" => "category3",
				"title" => "Silopunk Commission",
				"category" => "Category 3",
			],
			[
				"data_item" => "category4",
				"title" => "Tala Tora Commission",
				"category" => "Category 4",
			],
			[
				"data_item" => "category5",
				"title" => "Vigitrick",
				"category" => "Category 5",
			],
		];

		$data_slider = [
			["title" => "Vigitrick"],
			["title" => "Collab Teaser ft. Kilanpowa"],
			["title" => "Serena Shinju Fanart"],
			["title" => "Mufft Swiftpath Commission"],
			["title" => "Emmi Zaelith Commission"],
			["title" => "Onigiri Comission"],
		];

		$galleries = collect($data_gallery);
		$sliders = collect($data_slider);
		$summary_galleries = $galleries->take(5);

		return view(
			"content.index",
			compact("summary_galleries", "galleries", "sliders")
		);
	}
}
