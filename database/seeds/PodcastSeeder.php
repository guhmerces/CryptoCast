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
        
        $podcast = factory(App\Podcast::class)->states('published')->create([
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
            'duration' => "63"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 2,
            'title' => "Blocked by Design #2 - Distributed Design - Sarah Mills",
            'url' => "https://open.spotify.com/episode/44eSWCdGU7ELUOWqSOA1CW",
            'content_text' => "Tools, Applications, & Resources mentioned:Metamask — Web3 InterfaceZoom — Video ChatFigma — Design SoftwareMural — Design CollaborationMiro — Design CollaborationDesign meets Business — Educational Course.",
            'content_html' => "Tools, Applications, & Resources mentioned:Metamask — Web3 InterfaceZoom — Video ChatFigma — Design SoftwareMural — Design CollaborationMiro — Design CollaborationDesign meets Business — Educational Course." ,
            'download_url' => "https://open.spotify.com/episode/44eSWCdGU7ELUOWqSOA1CW",
            'duration' => "74"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 3,
            'title' => "The Bull Pen Podcast Bonus #3: Crypto Legends",
            'url' => "https://open.spotify.com/episode/2tK1bCaVk3qi5meZbqVbcm",
            'content_text' => "In Bonus Episode of The Bull Pen Podcast, The Crypto Bully speaks on another medium that he uses to connect with those in the cryptocurrency and blockchain space known as Crypto Legends. Lyndon and Ross Alex co-founded and run both the private Facebook group as well as the Late-Night Crypto Chat via YouTube live every Wednesday and Friday at 10 pm CST. He encourages everyone to come and join in on the conversion since all are welcome! Show notes: https://steemit.com/dtube/@bullpenpodcast/zjbdshcs Timestamps 00:00:00 – Exclusive Intro 00:00:09 – A Few Words Where To Find The Crypto Bully Twitter: https://twitter.com/1cryptobully Facebook: https://www.facebook.com/LyndonMorganII LinkedIn: https://www.linkedin.com/in/lyndon-morgan-ii/ Snapchat: https://www.snapchat.com/add/mrchangethewrld Where To Find The Bull Pen Podcast Website: http://thebullpenpodcast.io Discord: https://discord.gg/gNHJUN5 Steemit: https://steemit.com/@bullpenpodcast Twitter: https://twitter.com/1BullPenPodcast Instagram: https://www.instagram.com/1bullpenpodcast/ Facebook: https://www.facebook.com/1bullpenpodcast LinkedIn: https://www.linkedin.cm/company/thebullpenpodcast YouTube: https://www.youtube.com/channel/UCPyp6_riQh7UtSdycvLp9TQ Where To Find Our Partners and Biggest Supporters The Bitcoin Podcast Network: https://thebitcoinpodcast.com/ ECC: https://ecc.network/ Satoshi Media Group: https://satoshimediagroup.cc/ MARKNetwork: https://www.mark-network.com/ Blockchain Management Group: https://bmgroup.io/ If you're a blockchain and/or cryptocurrency enthusiast or influencer and want to be featured on The Bull Pen Podcast feel free to contact The Crypto Bully at info@thebullpenpodcast.io for inquiries.",
            'content_html' => "In Bonus Episode of The Bull Pen Podcast, The Crypto Bully speaks on another medium that he uses to connect with those in the cryptocurrency and blockchain space known as Crypto Legends. Lyndon and Ross Alex co-founded and run both the private Facebook group as well as the Late-Night Crypto Chat via YouTube live every Wednesday and Friday at 10 pm CST. He encourages everyone to come and join in on the conversion since all are welcome! Show notes: https://steemit.com/dtube/@bullpenpodcast/zjbdshcs Timestamps 00:00:00 – Exclusive Intro 00:00:09 – A Few Words Where To Find The Crypto Bully Twitter: https://twitter.com/1cryptobully Facebook: https://www.facebook.com/LyndonMorganII LinkedIn: https://www.linkedin.com/in/lyndon-morgan-ii/ Snapchat: https://www.snapchat.com/add/mrchangethewrld Where To Find The Bull Pen Podcast Website: http://thebullpenpodcast.io Discord: https://discord.gg/gNHJUN5 Steemit: https://steemit.com/@bullpenpodcast Twitter: https://twitter.com/1BullPenPodcast Instagram: https://www.instagram.com/1bullpenpodcast/ Facebook: https://www.facebook.com/1bullpenpodcast LinkedIn: https://www.linkedin.cm/company/thebullpenpodcast YouTube: https://www.youtube.com/channel/UCPyp6_riQh7UtSdycvLp9TQ Where To Find Our Partners and Biggest Supporters The Bitcoin Podcast Network: https://thebitcoinpodcast.com/ ECC: https://ecc.network/ Satoshi Media Group: https://satoshimediagroup.cc/ MARKNetwork: https://www.mark-network.com/ Blockchain Management Group: https://bmgroup.io/ If you're a blockchain and/or cryptocurrency enthusiast or influencer and want to be featured on The Bull Pen Podcast feel free to contact The Crypto Bully at info@thebullpenpodcast.io for inquiries.",
            'download_url' => "https://open.spotify.com/episode/2tK1bCaVk3qi5meZbqVbcm",
            'duration' => "4"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 4,
            'title' => "Law & Blockchain #4: Georgia Quinn",
            'url' => "https://open.spotify.com/episode/1farm6GMWOo5RlWpz7afDZ",
            'content_text' => "As Chair of the Advisory Board and Co-founder of iDisclose, Georgia Quinn assists entrepreneurs and small and startup businesses access capital and other resources they need in order to grow and prosper. She also is on the General Counsel at Coinlist, which is building the platform where the best digital asset companies run their token sales. Their customers are at the center of the digital asset and blockchain ecosystem. Georgia, and Amy Wan discuss recent securities law updates and more.",
            'content_html' => "",
            'download_url' => "https://open.spotify.com/episode/1farm6GMWOo5RlWpz7afDZ",
            'duration' => "31"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 5,
            'title' => "An Ethereum Podcast: Episode #5",
            'url' => "https://open.spotify.com/episode/5uFVeRSBxzmYAbGShGaBEX",
            'content_text' => "In this episode, Evan talks to Adam Nestler from Skedaddle. They’re launching the Kudos Protocol because they’ve seen how service-oriented economies could use a decentralized tipping and reputation protocol. It’s a very interesting and ambitious project about moving from tipping to a blockchain protocol.",
            'content_html' => "",
            'download_url' => "https://open.spotify.com/episode/5uFVeRSBxzmYAbGShGaBEX",
            'duration' => "35"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 6,
            'title' => "Monero Monitor: Mimblewimble with Andrew Poelstra",
            'url' => "https://open.spotify.com/episode/03JLzm1LiyEBp8RiGM4JrM",
            'content_text' => "Welcome to a special CROSS EPISODE where this week Monero Monitor does a guest episode on our network. In July 2016, an unknown developer going by the name Tom Elvis Jedusor dropped a link to a Tor hidden service on the bitcoin-wizards IRC channel. In it, he revealed a new protocol dubbed Mimblewimble after the tongue-tying curse in Harry Potter, because it is used to prevent the blockchain from talking about all user's information. In the time since, multiple researchers and developers have continued to flesh out and build on Jedusors innovation, in many respects led by Andrew Poelstra, a Bitcoin developer and mathematician at Blockstream. This deep dive with Andrew covers the technical details of Mimblewimbles scaling and privacy-enhancing features, discusses the real world logistics of using the protocol, and looks at some of the coolest features enabled by the technology. We discuss how Bulletproofs can help both Mimblewimble and Monero better scale, and also touch on how ValueShuffle might further improve privacy in Mimblewimble.",
            'content_html' => "",
            'download_url' => "https://open.spotify.com/episode/03JLzm1LiyEBp8RiGM4JrM",
            'duration' => "72"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 7,
            'title' => "Buy or Sell, What the Hell #5",
            'url' => "https://open.spotify.com/episode/03JLzm1LiyEBp8RiGM4JrM",
            'content_text' => "Today the team goes over what problems a lot of traders run into when trading and how they can start to avoid them. There is no “holy grail” when trading, only a process of proper risk management. Your only job as a trader is to manage your risk properly, not to tell a story. Fundamentals and valuation are two fields focused on often but what is usually overlooked is the cyclical and mental aspects of trading.",
            'content_html' => "",
            'download_url' => "https://open.spotify.com/episode/03JLzm1LiyEBp8RiGM4JrM",
            'duration' => "72"
        ]);





        $podcast = factory(App\Podcast::class)->states('published')->create([            
            'title' => 'Bitcoin Basics Podcast',
            'description' => 'Invest in your own education before investing in Bitcoin. Hosts Faris & Gordon (CoinCompass.com) explain fundamental concepts, discuss current trends, translate the technical into the non-technical and keep you informed regarding major Bitcoin developments.',
            'website' => 'http://coincompass.com',
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
            'duration' => "17"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 2,
            'title' => "The Blockchain: Bitcoin Begins (002)",
            'url' => "https://open.spotify.com/episode/53UJYASqNtZGuU0cHUAjhW",
            'content_text' => "Faris starts the 'Bitcoin Begins' presentation by explaining the basics of money at the Beer & Bitcoin night.",
            'content_html' => "Faris starts the 'Bitcoin Begins' presentation by explaining the basics of money at the Beer & Bitcoin night.",
            'download_url' => "https://open.spotify.com/episode/53UJYASqNtZGuU0cHUAjhW",
            'duration' => "18"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 3,
            'title' => "Q&A: Bitcoin Begins (003)",
            'url' => "https://open.spotify.com/episode/2t6v1RMKMf7n1lzb0cQMsQ",
            'content_text' => "Faris finishes the 'Bitcoin Begins' presentation by answering questions at the Beer & Bitcoin night.",
            'content_html' => "Faris finishes the 'Bitcoin Begins' presentation by answering questions at the Beer & Bitcoin night.",
            'download_url' => "https://open.spotify.com/episode/2t6v1RMKMf7n1lzb0cQMsQ",
            'duration' => "31"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 4,
            'title' => "Peer-To-Peer: Bitcoin White Paper",
            'url' => "https://open.spotify.com/episode/6SjVPpk8vI01jrUsMyIU9J",
            'content_text' => "Faris and Gordon begin to explain the Bitcoin White Paper by discussing Peer-to-Peer networks",
            'content_html' => "content",
            'download_url' => "https://open.spotify.com/episode/6SjVPpk8vI01jrUsMyIU9J",
            'duration' => "31"
        ]);





        $podcast = factory(App\Podcast::class)->states('published')->create([            
            'title' => 'Tales from the Crypt: A Bitcoin Podcast',
            'description' => 'Tales from the Crypt is a podcast hosted by Marty Bent about Bitcoin. Join Marty, Editor in Chief of "the best newsletter in crypto", as he sits down to discuss Bitcoin with interesting people. Support this podcast: https://anchor.fm/tales-from-the-crypt/support',
            'website' => 'http://talesfromthecrypt.com',
            'cover_path' => 'images/podcast-art/tales-from-the-crypt.jpeg'  
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 1,
            'title' => "Tales from the Crypt Ep1: The History of Bitcoin",
            'url' => "https://open.spotify.com/episode/6dBV24tnYQ4o1jJBDijpUx",
            'content_text' => "Marty and Louis discuss the history of Bitcoin, where they were when the Phillies won the world series, Brad Pitt, and Brock Lesnar.---Support this podcast: https://anchor.fm/tales-from-the-crypt/support",
            'content_html' => "",
            'download_url' => "https://open.spotify.com/episode/6dBV24tnYQ4o1jJBDijpUx",
            'duration' => "29"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 2,
            'title' => "Tales from the Crypt: Pierre Rochard",
            'url' => "https://open.spotify.com/episode/2Jm2f0VkWLH9KS04EasaVl",
            'content_text' => "Marty sits down with Pierre Rochard, co-founder of the Satoshi Nakamoto Institute, to discuss a litany of topics. Tune into Pt. I of the three part episode to learn about Austrian Economics, the Tezos debacle, Bitcoin's governance, Linux, hyperbitcoinization, and speculative attacks.",
            'content_html' => "Marty sits down with Pierre Rochard, co-founder of the Satoshi Nakamoto Institute, to discuss a litany of topics. Tune into Pt. I of the three part episode to learn about Austrian Economics, the Tezos debacle, Bitcoin's governance, Linux, hyperbitcoinization, and speculative attacks.",
            'download_url' => "https://open.spotify.com/episode/2Jm2f0VkWLH9KS04EasaVl",
            'duration' => "84"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 3,
            'title' => "Tales from the Crypt #3: Santiago Siri",
            'url' => "https://open.spotify.com/episode/0kYjUECw8wK03bbXqTIfBW",
            'content_text' => "Marty sits down with Santiago Siri, co-founder of Democracy.Earth, to talk about a range of topics ",
            'content_html' => "Marty sits down with Santiago Siri, co-founder of Democracy.Earth, to talk about a range of topics ",
            'download_url' => "https://open.spotify.com/episode/0kYjUECw8wK03bbXqTIfBW",
            'duration' => "102"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 4,
            'title' => "Tales from the Crypt #4: What the hell is going on?",
            'url' => "https://open.spotify.com/episode/3jukSwNHEFiQLDVi80tJ8j",
            'content_text' => "Marty is back in the studio with Louis and a special guest, Barstool's resident spider monkey, Nate. In this episode Nate signs a band, PFT makes a cameo to give us a lesson in exponential growth, and Marty answers all the questions Louis and Nate have about the current events in Bitcoin. Tune in to get caught up with all of the news that has been going on in Bitcoin. ",
            'content_html' => "Marty sits down with Santiago Siri, co-founder of Democracy.Earth, to talk about a range of topics ",
            'download_url' => "https://open.spotify.com/episode/3jukSwNHEFiQLDVi80tJ8j",
            'duration' => "57"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 5,
            'title' => "Tales from the Crypt #5: John Newbery",
            'url' => "https://open.spotify.com/episode/2fsrmSpMJRKu7vtSGUSwAR",
            'content_text' => "Marty is back in the studio with Louis and a special guest, Barstool's resident spider monkey, Nate. In this episode Nate signs a band, PFT makes a cameo to give us a lesson in exponential growth, and Marty answers all the questions Louis and Nate have about the current events in Bitcoin. Tune in to get caught up with all of the news that has been going on in Bitcoin. ",
            'content_html' => "Marty sits down with Santiago Siri, co-founder of Democracy.Earth, to talk about a range of topics ",
            'download_url' => "https://open.spotify.com/episode/2fsrmSpMJRKu7vtSGUSwAR",
            'duration' => "81"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 6,
            'title' => "Tales from the Crypt #6: Matt Corallo Pt. I",
            'url' => "https://open.spotify.com/episode/2HP6AknT5b62GDO8w6cK3U",
            'content_text' => "Join Marty as he sits down with Matt Corallo, a Bitcoin Core contributor, to discuss Bitcoin, the current altcoin landscape, scaling blockchains, cryptokitties, all time highs + bubbles, and much more. Drink of choice for this Happy Hour was Brooklyn Brewery's Pilsner.",
            'content_html' => "Join Marty as he sits down with Matt Corallo, a Bitcoin Core contributor, to discuss Bitcoin, the current altcoin landscape, scaling blockchains, cryptokitties, all time highs + bubbles, and much more. Drink of choice for this Happy Hour was Brooklyn Brewery's Pilsner. ",
            'download_url' => "https://open.spotify.com/episode/2HP6AknT5b62GDO8w6cK3U",
            'duration' => "85"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 7,
            'title' => "Tales from the Crypt #7: Matt Corallo Pt. II",
            'url' => "https://open.spotify.com/episode/4ERIiQEvFJwhT4TgNBrKqO",
            'content_text' => "Catch Pt. II of Marty's conversation with Matt Corallo to hear them discuss Bitcoin's chances of succeeding, how Bitcoin makes people smarter, and how everyone is ignorant when it comes to Bitcoin + blockchains. Enjoy. ",
            'content_html' => "Catch Pt. II of Marty's conversation with Matt Corallo to hear them discuss Bitcoin's chances of succeeding, how Bitcoin makes people smarter, and how everyone is ignorant when it comes to Bitcoin + blockchains. Enjoy. ",
            'download_url' => "https://open.spotify.com/episode/4ERIiQEvFJwhT4TgNBrKqO",
            'duration' => "81"
        ]);





        $podcast = factory(App\Podcast::class)->states('published')->create([            
            'title' => 'Citizen Bitcoin',
            'description' => 'Citizen Bitcoin Podcast',
            'website' => 'http://citizenbitcoin.world',
            'cover_path' => 'images/podcast-art/citizien-bitcoin.jpeg'  
        ]);


        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 1,
            'title' => "Cory Klippsten: Starting Up a Bitcoin Company",
            'url' => "https://open.spotify.com/episode/4kdwKwWU12PHHaa1CTU1g0",
            'content_text' => "Cory Klippsten is the founder and CEO of Swan, a bitcoin company. Cory and I hang out and chat about what it takes to start up a bitcoin company, we discuss the Taleb inspired Swan brand, how bitcoin is an incredibly positive black swan event and we riff on bitcoin’s antifragility. We get into how fundraising for bitcoin companies is different from fundraising for traditional tech companies and we go down some random rabbit holes that pop up in the conversation.Citizen Bitcoin on TwitterCitizen Bitcoin PodcastCitizen Bitcoin Lightning ShopCitizen Bitcoin Layer One merch collectionMusic: Moon in the Sky by HobotekLinks from the episode:SwanSwan on TwitterGiveBitcoinGiveBitcoin on TwitterCory on Twitter",
            'content_html' => "Cory Klippsten is the founder and CEO of Swan, a bitcoin company. Cory and I hang out and chat about what it takes to start up a bitcoin company, we discuss the Taleb inspired Swan brand, how bitcoin is an incredibly positive black swan event and we riff on bitcoin’s antifragility. We get into how fundraising for bitcoin companies is different from fundraising for traditional tech companies and we go down some random rabbit holes that pop up in the conversation.Citizen Bitcoin on TwitterCitizen Bitcoin PodcastCitizen Bitcoin Lightning ShopCitizen Bitcoin Layer One merch collectionMusic: Moon in the Sky by HobotekLinks from the episode:SwanSwan on TwitterGiveBitcoinGiveBitcoin on TwitterCory on Twitter",
            'download_url' => "https://open.spotify.com/episode/4kdwKwWU12PHHaa1CTU1g0",
            'duration' => "62"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 2,
            'title' => "Andy Edstrom: Investing in Bitcoin",
            'url' => "https://open.spotify.com/episode/3sxeJtulPjXdkPVijqdXrQ",
            'content_text' => " Andy Edstrom is a wealth manager who has fallen down the bitcoin rabbit hole. He started writing content to justify a small stake in bitcoin for his clients and that turned into the new book “Why Buy Bitcoin” - a great book to recommend to family and friends thinking about an investment in bitcoin. Andy’s history in the finance industry gives him a valuable perspective as one of early adopters of bitcoin from the industry. In this episode we get into that history and perspective, we discuss where the finance industry currently is in terms of moving toward embracing bitcoin as an asset. We talk about monetary maximalism and how bitcoin might change our economy. As any good wealth manager should, Andy has a thorough examination of bitcoin’s risk as an investment in the closing chapters of his book and we discuss them.Citizen Bitcoin on TwitterCitizen Bitcoin PodcastCitizen Bitcoin Lightning ShopCitizen Bitcoin Layer One merch collectionMusic: Moon in the Sky by HobotekLinks from the episode:Andy on TwitterAndy's websiteAndy's book on Amazon",
            'content_html' => " Andy Edstrom is a wealth manager who has fallen down the bitcoin rabbit hole. He started writing content to justify a small stake in bitcoin for his clients and that turned into the new book “Why Buy Bitcoin” - a great book to recommend to family and friends thinking about an investment in bitcoin. Andy’s history in the finance industry gives him a valuable perspective as one of early adopters of bitcoin from the industry. In this episode we get into that history and perspective, we discuss where the finance industry currently is in terms of moving toward embracing bitcoin as an asset. We talk about monetary maximalism and how bitcoin might change our economy. As any good wealth manager should, Andy has a thorough examination of bitcoin’s risk as an investment in the closing chapters of his book and we discuss them.Citizen Bitcoin on TwitterCitizen Bitcoin PodcastCitizen Bitcoin Lightning ShopCitizen Bitcoin Layer One merch collectionMusic: Moon in the Sky by HobotekLinks from the episode:Andy on TwitterAndy's websiteAndy's book on Amazon",
            'download_url' => "https://open.spotify.com/episode/3sxeJtulPjXdkPVijqdXrQ",
            'duration' => "98"
        ]);     
        
        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 3,
            'title' => "Knut Svanholm: Freedom and Hyperbitcoinization",
            'url' => "https://open.spotify.com/episode/43w1TlFLY7sp1QCxCxbH9W",
            'content_text' => "Knut Svanholm is the author of Sovereignty Through Mathematics. Knut and I talk about how this fiat monstrosity erodes our basic freedoms and how the discovery of absolute scarcity that is bitcoin will restore and protect those freedoms. We talk a bit about lightning and close out by riffing for quite a while on the prospects of hyperbitconization and how it could affect our social order.Citizen Bitcoin on TwitterCitizen Bitcoin PodcastCitizen Bitcoin Lightning ShopCitizen Bitcoin Layer One merch collectionMusic: Moon in the Sky by HobotekLinks from the episode:Sovereignty Through MathematicsKnut on Twitter",
            'content_html' => "Knut Svanholm is the author of Sovereignty Through Mathematics. Knut and I talk about how this fiat monstrosity erodes our basic freedoms and how the discovery of absolute scarcity that is bitcoin will restore and protect those freedoms. We talk a bit about lightning and close out by riffing for quite a while on the prospects of hyperbitconization and how it could affect our social order.Citizen Bitcoin on TwitterCitizen Bitcoin PodcastCitizen Bitcoin Lightning ShopCitizen Bitcoin Layer One merch collectionMusic: Moon in the Sky by HobotekLinks from the episode:Sovereignty Through MathematicsKnut on Twitter",
            'download_url' => "https://open.spotify.com/episode/43w1TlFLY7sp1QCxCxbH9W",
            'duration' => "76"
        ]);

        $episode = factory(App\Episode::class)->states('published')->create([
            'podcast_id' => $podcast->id,
            'number' => 4,
            'title' => "Yan Pritzker: The Money Red Pill, Bitcoin Tech and Swan Bitcoin",
            'url' => "https://open.spotify.com/episode/0JTU2fFlO4Vv5RpygFggOS",
            'content_text' => " Yan Pritzker, author of Inventing Bitcoin and cofounder/CTO of Swan Bitcoin, joins me to talk about his background, the money red pill that bitcoin serves up to us, bitcoin tech and his book. Citizen Bitcoin on TwitterCitizen Bitcoin PodcastCitizen Bitcoin Lightning ShopCitizen Bitcoin Layer One merch collectionMusic: Moon in the Sky by HobotekLinks from the episode:Inventing BitcoinYan on TwitterGiveBitcoin",
            'content_html' => " Yan Pritzker, author of Inventing Bitcoin and cofounder/CTO of Swan Bitcoin, joins me to talk about his background, the money red pill that bitcoin serves up to us, bitcoin tech and his book. Citizen Bitcoin on TwitterCitizen Bitcoin PodcastCitizen Bitcoin Lightning ShopCitizen Bitcoin Layer One merch collectionMusic: Moon in the Sky by HobotekLinks from the episode:Inventing BitcoinYan on TwitterGiveBitcoin",
            'download_url' => "https://open.spotify.com/episode/0JTU2fFlO4Vv5RpygFggOS",
            'duration' => "83"
        ]);

        
    }
}
