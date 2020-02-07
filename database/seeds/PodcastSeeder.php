<?php

use Illuminate\Database\Seeder;

class PodcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $podcast = factory(App\Podcast::class)->states('published')->create([
            'user_id' => factory(App\User::class)->create()->id,
            'title' => 'The Bitcoin Podcast Network',
            'description' => 'The Bitcoin Podcast Network is a collection of long form conversation format podcasts on bitcoin, blockchain, ethereum and everything in between. Shows include The Bitcoin Podcast, Announcements, On-Ramping with Dee,',
            'website' => 'http://thebitcoinpodcast.com/',
            'cover_path' => 'images/podcast-art/bitcoin-podcast-network.jpeg'  
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 1,
            'title' => "HIO Panels #1 - Ethereum's Serenity (ETH2.0) Developer Experience",
            'url' => "https://open.spotify.com/episode/5mDAHWKRPaIuOYJfIBaLvW",
            'content_text' => "Today we announce the start of Hashing It Out Panels, a show where we bring on multiple domain experts to discuss a given topic.Today we dive into what the developer experience will be like for Ethereum's Serenity (also called ETH2.0).We talk about the roadmap, current state, available tooling, security and more!Corey Petty and Jaye Harrill from Quanstamp moderate a panel containing the following: Jacek Sieka from Status' NimbusPaul Hauner from Sigma Prime's LighthousePreston van Loon from Prysmatic Labs' PrysmWill Villanueva from ConsenSys' QuiltHsiao-Wei Wang from the Ethereum FoundationThis panel is meant to serve as a primer for the breakout session happening at Devcon 5 regarding developer experience expectations.If you like this and are going, you should definitely attend this session!Also, please fill out the survey linked below to help gather information about what developers want and expect!Enjoy!Links:Developer Survey",
            'content_html' => "Today we announce the start of Hashing It Out Panels, a show where we bring on multiple domain experts to discuss a given topic.Today we dive into what the developer experience will be like for Ethereum's Serenity (also called ETH2.0).We talk about the roadmap, current state, available tooling, security and more!Corey Petty and Jaye Harrill from Quanstamp moderate a panel containing the following: Jacek Sieka from Status' NimbusPaul Hauner from Sigma Prime's LighthousePreston van Loon from Prysmatic Labs' PrysmWill Villanueva from ConsenSys' QuiltHsiao-Wei Wang from the Ethereum FoundationThis panel is meant to serve as a primer for the breakout session happening at Devcon 5 regarding developer experience expectations.If you like this and are going, you should definitely attend this session!Also, please fill out the survey linked below to help gather information about what developers want and expect!Enjoy!Links:Developer Survey",
            'download_url' =>"https://open.spotify.com/episode/5mDAHWKRPaIuOYJfIBaLvW",
            'duration' => "3780"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 2,
            'title' => "Blocked by Design #2 - Distributed Design - Sarah Mills",
            'url' => "https://open.spotify.com/episode/44eSWCdGU7ELUOWqSOA1CW",
            'content_text' => "Tools, Applications, & Resources mentioned:Metamask — Web3 InterfaceZoom — Video ChatFigma — Design SoftwareMural — Design CollaborationMiro — Design CollaborationDesign meets Business — Educational Course.",
            'content_html' => "Tools, Applications, & Resources mentioned:Metamask — Web3 InterfaceZoom — Video ChatFigma — Design SoftwareMural — Design CollaborationMiro — Design CollaborationDesign meets Business — Educational Course." ,
            'download_url' => "https://open.spotify.com/episode/44eSWCdGU7ELUOWqSOA1CW",
            'duration' => "4440"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 3,
            'title' => "The Bull Pen Podcast Bonus #3: Crypto Legends",
            'url' => "https://open.spotify.com/episode/2tK1bCaVk3qi5meZbqVbcm",
            'content_text' => "In Bonus Episode of The Bull Pen Podcast, The Crypto Bully speaks on another medium that he uses to connect with those in the cryptocurrency and blockchain space known as Crypto Legends. Lyndon and Ross Alex co-founded and run both the private Facebook group as well as the Late-Night Crypto Chat via YouTube live every Wednesday and Friday at 10 pm CST. He encourages everyone to come and join in on the conversion since all are welcome! Show notes: https://steemit.com/dtube/@bullpenpodcast/zjbdshcs Timestamps 00:00:00 – Exclusive Intro 00:00:09 – A Few Words Where To Find The Crypto Bully Twitter: https://twitter.com/1cryptobully Facebook: https://www.facebook.com/LyndonMorganII LinkedIn: https://www.linkedin.com/in/lyndon-morgan-ii/ Snapchat: https://www.snapchat.com/add/mrchangethewrld Where To Find The Bull Pen Podcast Website: http://thebullpenpodcast.io Discord: https://discord.gg/gNHJUN5 Steemit: https://steemit.com/@bullpenpodcast Twitter: https://twitter.com/1BullPenPodcast Instagram: https://www.instagram.com/1bullpenpodcast/ Facebook: https://www.facebook.com/1bullpenpodcast LinkedIn: https://www.linkedin.cm/company/thebullpenpodcast YouTube: https://www.youtube.com/channel/UCPyp6_riQh7UtSdycvLp9TQ Where To Find Our Partners and Biggest Supporters The Bitcoin Podcast Network: https://thebitcoinpodcast.com/ ECC: https://ecc.network/ Satoshi Media Group: https://satoshimediagroup.cc/ MARKNetwork: https://www.mark-network.com/ Blockchain Management Group: https://bmgroup.io/ If you're a blockchain and/or cryptocurrency enthusiast or influencer and want to be featured on The Bull Pen Podcast feel free to contact The Crypto Bully at info@thebullpenpodcast.io for inquiries.",
            'content_html' => "In Bonus Episode of The Bull Pen Podcast, The Crypto Bully speaks on another medium that he uses to connect with those in the cryptocurrency and blockchain space known as Crypto Legends. Lyndon and Ross Alex co-founded and run both the private Facebook group as well as the Late-Night Crypto Chat via YouTube live every Wednesday and Friday at 10 pm CST. He encourages everyone to come and join in on the conversion since all are welcome! Show notes: https://steemit.com/dtube/@bullpenpodcast/zjbdshcs Timestamps 00:00:00 – Exclusive Intro 00:00:09 – A Few Words Where To Find The Crypto Bully Twitter: https://twitter.com/1cryptobully Facebook: https://www.facebook.com/LyndonMorganII LinkedIn: https://www.linkedin.com/in/lyndon-morgan-ii/ Snapchat: https://www.snapchat.com/add/mrchangethewrld Where To Find The Bull Pen Podcast Website: http://thebullpenpodcast.io Discord: https://discord.gg/gNHJUN5 Steemit: https://steemit.com/@bullpenpodcast Twitter: https://twitter.com/1BullPenPodcast Instagram: https://www.instagram.com/1bullpenpodcast/ Facebook: https://www.facebook.com/1bullpenpodcast LinkedIn: https://www.linkedin.cm/company/thebullpenpodcast YouTube: https://www.youtube.com/channel/UCPyp6_riQh7UtSdycvLp9TQ Where To Find Our Partners and Biggest Supporters The Bitcoin Podcast Network: https://thebitcoinpodcast.com/ ECC: https://ecc.network/ Satoshi Media Group: https://satoshimediagroup.cc/ MARKNetwork: https://www.mark-network.com/ Blockchain Management Group: https://bmgroup.io/ If you're a blockchain and/or cryptocurrency enthusiast or influencer and want to be featured on The Bull Pen Podcast feel free to contact The Crypto Bully at info@thebullpenpodcast.io for inquiries.",
            'download_url' => "https://open.spotify.com/episode/2tK1bCaVk3qi5meZbqVbcm",
            'duration' => "240"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 4,
            'title' => "Law & Blockchain #4: Georgia Quinn",
            'url' => "",
            'content_text' => "",
            'content_html' => "",
            'download_url' => "",
            'duration' => "1860"
        ]);






        $podcast = factory(App\Podcast::class)->states('published')->create([
            'user_id' => factory(App\User::class)->create()->id,
            'title' => 'Bitcoin Basics Podcast',
            'description' => 'Invest in your own education before investing in Bitcoin. Hosts Faris & Gordon (CoinCompass.com) explain fundamental concepts, discuss current trends, translate the technical into the non-technical and keep you informed regarding major Bitcoin developments.',
            'website' => 'coincompass.com',
            'cover_path' => 'images/podcast-art/bitcoin-basics-podcast.jpeg'  
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 1,
            'title' => "The Basics: Bitcoin Begins",
            'url' => "https://open.spotify.com/episode/5ZWWHysyqEYjgSbIi1BVpW",
            'content_text' => "Faris starts the 'Bitcoin Begins' presentation by explaining the basics of money at the Beer & Bitcoin night.",
            'content_html' => "Faris starts the 'Bitcoin Begins' presentation by explaining the basics of money at the Beer & Bitcoin night.",
            'download_url' => "https://open.spotify.com/episode/5ZWWHysyqEYjgSbIi1BVpW",
            'duration' => "1020"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 2,
            'title' => "The Blockchain: Bitcoin Begins (002)",
            'url' => "https://open.spotify.com/episode/53UJYASqNtZGuU0cHUAjhW",
            'content_text' => "Faris starts the 'Bitcoin Begins' presentation by explaining the basics of money at the Beer & Bitcoin night.",
            'content_html' => "Faris starts the 'Bitcoin Begins' presentation by explaining the basics of money at the Beer & Bitcoin night.",
            'download_url' => "https://open.spotify.com/episode/53UJYASqNtZGuU0cHUAjhW",
            'duration' => "1080"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 3,
            'title' => "Q&A: Bitcoin Begins (003)",
            'url' => "https://open.spotify.com/episode/2t6v1RMKMf7n1lzb0cQMsQ",
            'content_text' => "Faris finishes the 'Bitcoin Begins' presentation by answering questions at the Beer & Bitcoin night.",
            'content_html' => "Faris finishes the 'Bitcoin Begins' presentation by answering questions at the Beer & Bitcoin night.",
            'download_url' => "https://open.spotify.com/episode/2t6v1RMKMf7n1lzb0cQMsQ",
            'duration' => "1080"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 4,
            'title' => "Peer-To-Peer: Bitcoin White Paper",
            'url' => "https://open.spotify.com/episode/6SjVPpk8vI01jrUsMyIU9J",
            'content_text' => "Faris and Gordon begin to explain the Bitcoin White Paper by discussing Peer-to-Peer networks",
            'content_html' => "content",
            'download_url' => "https://open.spotify.com/episode/6SjVPpk8vI01jrUsMyIU9J",
            'duration' => "1860"
        ]);





        $podcast = factory(App\Podcast::class)->states('published')->create([
            'user_id' => factory(App\User::class)->create()->id,
            'title' => 'Tales from the Crypt: A Bitcoin Podcast',
            'description' => 'Tales from the Crypt is a podcast hosted by Marty Bent about Bitcoin. Join Marty, Editor in Chief of "the best newsletter in crypto", as he sits down to discuss Bitcoin with interesting people. Support this podcast: https://anchor.fm/tales-from-the-crypt/support',
            'website' => 'talesfromthecrypt.com',
            'cover_path' => 'images/podcast-art/tales-from-the-crypt.jpeg'  
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 1,
            'title' => "Tales from the Crypt Ep1: The History of Bitcoin",
            'url' => "https://open.spotify.com/episode/6dBV24tnYQ4o1jJBDijpUx",
            'content_text' => "Marty and Louis discuss the history of Bitcoin, where they were when the Phillies won the world series, Brad Pitt, and Brock Lesnar.---Support this podcast: https://anchor.fm/tales-from-the-crypt/support",
            'content_html' => "Tales from the Crypt: A Bitcoin Podcast",
            'download_url' => "https://open.spotify.com/episode/6dBV24tnYQ4o1jJBDijpUx",
            'duration' => "1740"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 2,
            'title' => "Tales from the Crypt: Pierre Rochard",
            'url' => "https://open.spotify.com/episode/2Jm2f0VkWLH9KS04EasaVl",
            'content_text' => "Marty sits down with Pierre Rochard, co-founder of the Satoshi Nakamoto Institute, to discuss a litany of topics. Tune into Pt. I of the three part episode to learn about Austrian Economics, the Tezos debacle, Bitcoin's governance, Linux, hyperbitcoinization, and speculative attacks.",
            'content_html' => "Marty sits down with Pierre Rochard, co-founder of the Satoshi Nakamoto Institute, to discuss a litany of topics. Tune into Pt. I of the three part episode to learn about Austrian Economics, the Tezos debacle, Bitcoin's governance, Linux, hyperbitcoinization, and speculative attacks.",
            'download_url' => "https://open.spotify.com/episode/2Jm2f0VkWLH9KS04EasaVl",
            'duration' => "5040"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 3,
            'title' => "Tales from the Crypt #3: Santiago Siri",
            'url' => "https://open.spotify.com/episode/0kYjUECw8wK03bbXqTIfBW",
            'content_text' => "Marty sits down with Santiago Siri, co-founder of Democracy.Earth, to talk about a range of topics ",
            'content_html' => "Marty sits down with Santiago Siri, co-founder of Democracy.Earth, to talk about a range of topics ",
            'download_url' => "https://open.spotify.com/episode/0kYjUECw8wK03bbXqTIfBW",
            'duration' => "6120"
        ]);

        
        */
    }
}
