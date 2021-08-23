<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		$data = [
			[
				"data_item" => "category1",
				"img" => "gallery1",
				"title" => "APEX Overlay",
			],
			[
				"data_item" => "category2",
				"img" => "gallery2",
				"title" => "Collab Teaser ft. Kilanpowa",
			],
			[
				"data_item" => "category3",
				"img" => "gallery3",
				"title" => "Desta Haldmaan Graffiti",
			],
			[
				"data_item" => "category4",
				"img" => "gallery4",
				"title" => "Dezxym Commission",
			],
			[
				"data_item" => "category5",
				"img" => "gallery5",
				"title" => "Dreamer Rii Commission",
			],
			[
				"data_item" => "category1",
				"img" => "gallery6",
				"title" => "Emmi Zaelith Commission",
			],
			[
				"data_item" => "category2",
				"img" => "gallery7",
				"title" => "Erina Mochi Graffiti + Background (no glasses)",
			],
			[
				"data_item" => "category3",
				"img" => "gallery8",
				"title" => "Gumi Commission",
			],
			[
				"data_item" => "category4",
				"img" => "gallery9",
				"title" => "Kamu Ganteng Today",
			],
			[
				"data_item" => "category5",
				"img" => "gallery10",
				"title" => "Kaze Bonus Design",
			],
			[
				"data_item" => "category1",
				"img" => "gallery11",
				"title" => "Kumi 5 Art Raffle",
			],
			[
				"data_item" => "category2",
				"img" => "gallery12",
				"title" => "Matcha + Graffiti Background",
			],
			[
				"data_item" => "category3",
				"img" => "gallery13",
				"title" => "MifanMara",
			],
			[
				"data_item" => "category4",
				"img" => "gallery14",
				"title" => "Mufft Swiftpath Commission",
			],
			[
				"data_item" => "category5",
				"img" => "gallery15",
				"title" => "Olivia Commission",
			],
			[
				"data_item" => "category1",
				"img" => "gallery16",
				"title" => "Onigiri Commission",
			],
			[
				"data_item" => "category2",
				"img" => "gallery17",
				"title" => "Rakun Illustration",
			],
			[
				"data_item" => "category3",
				"img" => "gallery18",
				"title" => "Reina Commission",
			],
			[
				"data_item" => "category4",
				"img" => "gallery19",
				"title" => "RekaGantenk + Graffiti",
			],
			[
				"data_item" => "category5",
				"img" => "gallery20",
				"title" => "Ryuuki Tatsuya Final",
			],
			[
				"data_item" => "category1",
				"img" => "gallery21",
				"title" => "Serena Shinju Fanart",
			],
			[
				"data_item" => "category2",
				"img" => "gallery22",
				"title" => "Silopunk Commission",
			],
			[
				"data_item" => "category3",
				"img" => "gallery23",
				"title" => "Silopunk Commission",
			],
			[
				"data_item" => "category4",
				"img" => "gallery24",
				"title" => "Tala Tora Commission",
			],
			[
				"data_item" => "category5",
				"img" => "gallery25",
				"title" => "Vigitrick",
			],
		];

		$summary_galleries = collect($data)->take(5);
		$galleries = collect($data);

		return view("content.index", compact("summary_galleries", "galleries"));
	}
}