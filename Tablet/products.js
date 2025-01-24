const products = [
    {
      id: 1,
      title: "APPLE 11\" iPad Air (2024) - 128 GB, Space Grey",
      price: "£599.00",
      description: `Product code: 387472<br><br>
      Inspiration can strike anywhere, and iPad Air will be right there with you. 
        The 11\" Liquid Retina display's perfectly portable and packs accurate colours and life-like contrast. Just 
        what you need for creative projects. You'll also need loads of power – luckily the M2 chip inside has got 
        just that. From sketching to editing and gaming breaks in between, everything will run like a dream. Only 
        longer, because it's got up to 10 hours of battery life. Apple Intelligence helps you write, express yourself 
        and get things done effortlessly. It draws on your personal context while setting a brand-new standard for 
        privacy in AI.<br><br><br>
        Good to know <br><br>
- iPadOS 17 is full of powerful features and apps for productivity, entertainment and everything in-between<br>
- You can capture stunning photos, record 4K video, and scan documents using the 12 MP rear camera <br>
- The 12 MP Ultra Wide front camera is in a landscape orientation and supports Centre Stage, which is perfect for FaceTime <br>
- Touch ID's your key to quickly unlocking your iPad, signing into apps, and making secure payments with Apple Pay <br>
- With WiFi 6E you'll have fast and rock-solid internet connection <br>
- The USB Type-C lets you charge your iPad, connect and external display and transfer files in seconds `,
      image: "Images/iPadAir.svg"
    },
    {
            id: 2,
            title: "LENOVO Tab P12 12.7\" Tablet - 128 GB, Storm Grey",
            price: "£229.00",
            description: `Product code: 636311<br><br>
            Tired of lugging around a heavy laptop? This Lenovo tablet is a lightweight solution to work and play on the go. 
            The 12.7" display's so roomy that you can easily work in split screen mode – amazing for multitasking. 
            And it'll take your note taking to the next level. Use the 8 MP rear cam to snap lecture notes, 
            then annotate all over them with the Tab Pen Plus. For treating yourself to some Netflix, the 3K screen will make any show look stunningly vibrant.
             And no Bluetooth speakers necessary when you have got 4 Dolby Atmos speakers from JBL thatll crank out big, bold, immersive sound.<br><br><br>
             Good to know<br><br>
              - For switching apps, the octa-core MediaTek processor makes the P12 nice and snappy.<br>
              - The 13 MP front-facing cam is perfect for crisp and clear video calls.,<br>
              - Use Lenovo Freestyle and your tablet turns into a drawing pad and pairs to compatible Windows PCs.,<br>
              - The microSD card slot gives you up to 1 TB of extra storage – no need to delete photos!,<br>
              - Log-ins are safe and speedy when you've got a fingerprint sensor.:<br>
              - If you're travelling, the battery can keep you entertained for up to 10 hours of video playback.,<br>
              - For the ultimate mobile productivity, you can connect it to the Lenovo Keyboard Pack (sold separately).`,
              image:"Images/Lenovo.svg"
    },
    {
        id: 3,
        title: "LENOVO Tab Plus 11.5\" Tablet with Sleeve - 128 GB, Luna Grey",
        price: "£199.00",
        description: `Product code: 529220<br><br>
        With the Lenovo Tab Plus,you won't miss a beat. It's perfect for watching your favourite comfort show or the latest blockbuster. 
        The 11.5 2K screen brings scenes to life with amazing detail and vivid colours. 
        And you'll be blown away by the sound coming out of the 8 JBL speakers. 
        That's right – 8 speakers to total with 4 tweeters and 4 bass units. 
        So everything from distant whispers to massive explosions will sound just right. 
        There's even a 175° kickstand on the back that makes it easy to find the perfect viewing angle. 
        Now you just need to find a comfy chair and kick back. <br><br><br>
       Good to know <br><br>
 - For switching apps, the octa-core MediaTek processor makes the Tab Plus nice and snappy<br>
- With a 90 Hz refresh rate you're in for some smooth action in your favourite mobile games <br>
- The 8 MP cameras on the front and back are perfect for crisp video calls <br>
- The microSD card slot gives you up to 1 TB of extra storage – no need to delete photos! <br>
- Log-ins are safe and speedy when you've got a facial recognition <br>
- If you're travelling, the battery can keep you entertained for up to 12 hours of video playback <br>
- It comes with a handy sleeve that keeps the Tab safe while you're out and about.` ,
        image: "Images/LenovoPlus.svg",
    },
    {
        id: 4,
        title: "SAMSUNG Galaxy Tab A9+ 8.7\" Tablet - 64 GB, Graphite",
        price: "£154.00",
        description: `Product code: 530807<br><br>

The Galaxy Tab A9 is perfect for watching movies and TV shows. It's got a nice and bright 8.7" screen that lets you enjoy every detail. 
And to make sure the audio is just as good, there are two powerful speakers. 
They use Dolby Atoms surround sound to make your shows even more gripping. 
And if you need to knock a thing or two off of your to-do list, all your apps will be snappy thanks to the octa-core processor<br><br><br>
 Good to know<br>
 - The 8 MP camera on the back a 5 MP camera on the front let you take sharp photos and jump on video calls <br>
- Facial recognition keeps your personal files safe, secure and for your eyes only <br>
- There's 64 GB of space for your apps and photos - and you can extend the storage up to 1 TB with a microSD card `,
        image: "Images/Samsung",
    },
    {
        id: 5,
        title: "SAMSUNG Galaxy Tab S9 FE 10.9\" 5G Tablet",
        price: "£1469.00",
        description: `Product code: 722805<br><br>

The Galaxy Tab S9 FE's got a screen to behold. The 2K display has a 90 Hz refresh rate,
 so the image isn't just super-sharp, but nice and smooth, too. So whether you're reading, 
 binging or gaming, you'll have a great time. Or whip out the mighty S Pen and turn the Galaxy Tab into a 
 notepad, sketchbook or a canvas. It's up to you and your creativity.
  The Exynos 1380 processor's got plenty of power, so it won't be holding you back.<br><br><br>
 
Good to know <br><br>
 
- Browse, scroll and stream wherever you are thanks to 5G connectivity <br>
- From video calls to Insta-worthy selfies – the 8 MP rear camera and a 12 MP selfie camera will always make you look sharp <br>
- It's IP68 water-resistant, so getting caught in a rain shower doesn't have to bother you <br>
- AKG tuned dual speakers pump out full and punchy sound to match the screens visuals <br>
- You'll have plenty of space for your files and photos with 128 GB of storage  <br>
- Super Fast Charging means you can quickly top-up the battery level between uses (45W Super Fast charger sold separately) <br>
- It supports WiFi 6 connection for super-fast and rock-steady internet <br>
- A fingerprint scanner keeps the tablet secure and for your eyes only.` ,
        image: "Images/Samsung2",
    },
{
    id: 6,
    title: "APPLE 10.9 iPad - 64 GB",
    price: "£210.00",
    description: `Product code: 399040<br><br>
    Your Apple iPad is up for anything – 
    shoot and edit 4K video, draw a digital masterpiece or just watch some Apple TV. 
    The A14 Bionic chip can do it all without skipping a beat.
     The 10.9" Liquid Retina Display is just beautiful, with high resolution,
      amazing colours and thin bezels. On the back, the 12 MP camera takes 4K video and stunning photos.
       The front camera's got an upgrade too. It's also 12 MP and uses Centre Stage to keep you front 
       and centre during video calls. And getting to all these features is super easy and secure with 
       Touch ID fingerprint scanner in the power button.<br>

Good to know<br>

- iPadOS makes multitasking easier than ever – helping you be more productive than ever<br>
- The 12 MP front camera is now in a landscape orientation, which is perfect for FaceTime<br>
- With WiFi 6 you'll have fast and rock-solid internet connection<br>
- True Tone adjusts the display to the colour temperature of the room
- A single charge gives you up to 10 hours of battery life – plenty of time for work and fun

` ,
    image: "Images/ipad",
},
{
    id: 7,
    title: "APPLE 10.2 iPad (2021) - 64 GB",
    price: "£189.00",
    description: `Product code: 346285<br><br>
iPad is the perfect sidekick for work and play. 
It's powered by an A13 Bionic chip that makes multitasking easier than ever.
 And you can game too, because its GPU is 20% faster. 
  But the real master stroke is the screen. 
  The 10.2" Retina display is incredibly accurate, vivid and comfortable no matter the lighting.
   That's because True Tone adjusts to the colour temp of your room. And iPadOS just lets you get stuff done. 
   There's all the apps you might need (and games you might want). 
   Plus, you can connect a mouse and a keyboard to take your productivity to the next level.<br><br>

Good to know<br><br>

- Throw in a 1st Gen Apple Pencil (sold separately) and you can get drawing and annotating<br>
- Facetime friends will see you clear as day on this 8 MP Wide camera<br>
- Centre Stage auto-pans and zooms so everyone's in focus no matter who comes and goes<br>
- You've got your trusty Touch ID to quickly unlock iPad, sign in to apps, and make secure payments with Apple Pay<br>
- Take it on the road and you'll get up to 10 hours of battery life` ,
    image: "Images/ipad2",
},
{
    id: 8,
    title: "APPLE 13 iPad Pro (2024) - 256 GB",
    price: "£899.00",
    description: `Product code: 391658<br><br>
Apple iPad Pro is here to make your ideas a reality.
 It's built around the new, insanely powerful M4 chip.
  With an upgraded CPU, GPU and Neural Engine, 
  this iPad Pro's up to 1.5x faster than the last one. 
  Multitasking, video editing and gaming are all a piece of cake for this powerhouse. 
  And it'll all look better than ever on the new Ultra Retina XDR display.
   It uses an innovative tandem OLED panel to bring images to life in incredible colour,
    contrast and brightness. All that power is packed into a body that's impossibly thin. 
    It measures just 5.1 mm, so it'll disappear into your bag until it's time to get stuff done.<br><br>

Good to know<br><br>

- iPadOS 17 is full of powerful features and apps for productivity, entertainment and everything in-between<br>
- The 12 MP front-facing camera is now in a landscape orientation, which is perfect for FaceTime<br>
- You can shoot 4K ProRes video and amazing images on the 12 MP Wide camera on the back<br>
- The ProMotion display brings movement to life with a dynamic refresh rate between 10 and 120 Hz<br>
- There's a Four-speaker system that'll immerse you in your favourite movies and shows<br>
- With WiFi 6E you'll have fast and rock-solid internet connection<br>
- Face ID is a super-fast and secure way to unlock your iPad and keep your data private<br>
- A single charge gives you up to 10 hours of battery life – plenty of time for work and fun<br>
- Hook up a 6K external display and other accessories with Thunderbolt` ,
    image: "Images/ipadpro",
},
{
    id: 9,
    title: "SAMSUNG Galaxy Tab S10 Ultra 14.6 5G Tablet - 256 GB",
    price: "£899.00",
    description: `Product code: 510754<br><br>
There's big, and then there's the Galaxy Tab S10 Ultra. 
The massive 14.6" Dynamic AMOLED 2X display lets you work, 
game, and stream in style. It's a real looker too, with a 3K 
resolution and 120 Hz refresh rate. Such an epic canvas needs a proper brush. 
And the included S Pen lets you scribble straight onto the screen.
 If you need help bringing your ideas to life, there's always Sketch to Image. 
 It uses AI to turn your drawings into digital masterpieces. Talk about state of the art!<br><br>

Good to know<br><br>

- Built-in Galaxy AI can help with anything from quick queries to big projects<br>
- Stuck on homework? Math Assist will solve any handwritten equations for you (just don't tell the teacher)<br>
- Jot down notes with the S Pen, and Note Assist will instantly turn them into text<br>
- Look sharp in every shot and video with the 12 MP rear camera and 13 MP front camera<br>
- The 120 Hz refresh rate makes gaming, swiping, and streaming look and feel extra smooth<br>
- AKG-tuned quad speakers with Dolby Atmos pump out rich and punchy audio<br>
- It's IP68 water-resistant, so if it takes a quick dip, you don't have to panic<br>
- You won't lose the S Pen anytime soon - it snaps straight onto the back of your tablet<br>
- A beefy MediaTek Dimensity 9300+ processor lets you game, browse, and use AI without a hitch` ,
    image: "Images/SamsungLaptop",
},
{
    id: 10,
    title: "SAMSUNG Galaxy Tab S10 Ultra 14.6 5G Tablet - 256 GB",
    price: "£449.00",
    description: `Product code: 698285<br><br>
There's big, and then there's the Galaxy Tab S10 Ultra. 
The massive 14.6" Dynamic AMOLED 2X display lets you work, game, and stream in style.
 It's a real looker too, with a 3K resolution and 120 Hz refresh rate. Such an epic canvas needs a proper brush. 
 And the included S Pen lets you scribble straight onto the screen. If you need help bringing your ideas to life, 
 there's always Sketch to Image. It uses AI to turn your drawings into digital masterpieces. Talk about state of the art!<br><br>

Good to know<br>

- Built-in Galaxy AI can help with anything from quick queries to big projects<br>
- Stuck on homework? Math Assist will solve any handwritten equations for you (just don't tell the teacher)<br>
- Jot down notes with the S Pen, and Note Assist will instantly turn them into text<br>
- Look sharp in every shot and video with the 12 MP rear camera and 13 MP front camera<br>
- The 120 Hz refresh rate makes gaming, swiping, and streaming look and feel extra smooth<br>
- AKG-tuned quad speakers with Dolby Atmos pump out rich and punchy audio<br>
- It's IP68 water-resistant, so if it takes a quick dip, you don't have to panic<br>
- You won't lose the S Pen anytime soon - it snaps straight onto the back of your tablet<br>
- A beefy MediaTek Dimensity 9300+ processor lets you game, browse, and use AI without a hitch` ,
    image: "Images/Lenovo4",
},
{
    id: 11,
    title: "APPLE MacBook Air 13.6 (2024) - M3, 512 GB SSD ",
    price: "£1416.00",
    description: `Product code: 387470<br><br>

Whatever you need to do, MacBook Air will make it look easy.
 Video editing and gaming are no match for the M3 chip's powerful CPU and GPU. 
 In fact, it's up to 1.6x faster than the M1 MacBook Air, so you'll really by flying through your workflows.
  The 13" Liquid Retina display makes every detail shine. It displays a billion colours,
   so you can appreciate every subtle shade. Just what you need for your creative projects
    and just what you want for movie nights. It's got a massive battery, that will keep you
     away from the plug for up to 18 hours on a single charge. 
     All that power is hiding in an all-aluminium body that's only 1.13 mm thin, and it doesn't even need a fan. 
     Apple Intelligence helps you write, express yourself and get things done effortlessly. 
     It draws on your personal context while setting a brand-new standard for privacy in AI.<br><br>


Good to know <br><br>
 
- For an extra kick in AI tasks, there a dedicated Neural Engine with 16 cores<br>
- The 1080p FaceTime HD camera will make you look sharp on video calls <br>
- You can browse, upload and stream faster than ever before with WiFi 6E <br>
- The four-speaker sound system with Spatial Audio will help you get immersed in your movies <br>
- With Touch ID, secure logins and Apple Pay are just a finger tap away – so safe, so convenient <br>
- Connect everything you need (with speed) thanks to the two Thunderbolt 4 ports <br>
- True Tone adjusts the brightness and colour temperature of the screen to keep your eyes comfy <br>
- The MagSafe 3 charger snaps into place automatically and it won't hurt your MacBook if you trip over the cable 
` ,
    image: "Images/MacBookAir",
},
{
    id: 12,
    title: "Lenovo Thinkpad IdeaPad Gaming 3 16 Gaming Laptop",
    price: "£799.00",
    description: `Product code: 561684<br><br>

The IdeaPad Gaming 3 is a certified gaming machine that fits into your backpack,
 so you can rack up wins anywhere. It's powered by the AMD Ryzen 5 6600H processor 
 and an NVIDIA RTX 3050 graphics card – great for serious Full HD gaming or demanding software.
  For truly cinematic gaming, you can even switch on ray tracing. Or for esports, push those frame rates to extremes 
  - the 165 HZ display won't miss a beat. Good thing you've got fans and Quad Vent cooling to keep your battlestation
   running as fast as possible when the action gets heated. <br><br>
 
Good to know <br><br>
 
- WiFi 6 and Gigabit Ethernet will keep your online multiplayer lag-free so you can crush opps<br> 
- The 16:10 Full HD screen makes sure every game, app or movie looks clear, crisp and detailed <br>
- Look sharp on all your virtual hangouts, thanks to the Full HD webcam <br>
- Light it up with the 4-zone RGB keyboard – and there's a numpad, too <br>
- With Nahimic Audio you can enjoy immersive  virtual surround sound <br>
- The 512 GB SSD is nice and speedy so less time wasted on load screens 
` ,
    image: "Images/Thinkpad",
},
{
    id: 13,
    title: "LENOVO IdeaPad 1 15.6 Laptop - AMD Ryzen 5, 512 GB SSD",
    price: "£499.00",
    description: `Product code: 703614 <br><br>

Whether you're catching up with friends or stuck in an important work call,
 look and sound better on the Lenovo IdeaPad 1. With an HD webcam and smart noise cancellation,
  your colleagues will focus on your lovely face and not any annoying background noise, like the sound of typing keyboards. 
  And the AMD Ryzen 5 processor will help you power through your everyday tasks, 
  like scrolling through social media or getting some online shopping done.<br><br> 
 
Good to know <br><br>
 
- Hook up an external monitor, charge or transfer files with the USB-C port <br>
- The webcam privacy shutter lets you decide when you want to be seen on camera <br>
- Get 2 hours of charge from just 15 minutes of charging with Rapid Charge Boost <br>
- Your photos, music and apps will load up quickly on the 512 GB SSD 

  
` ,
    image: "Images/Thinkpad2",
},
{
    id: 14,
    title: "HP 15s-fq5510sa 15.6 Laptop - Intel® Core™ i5, 256 GB SSD",
    price: "£309.00",
    description: `Product code: 675664 <br><br>

Work and play on the go with this HP laptop.
 Whether you're working on a project or diving into entertainment,
  its 12th Gen Intel® Core™ i3 processor has got you covered.
   You can see all your spreadsheets clearly without an external monitor on this detailed Full HD display.
    For speedy startups and quick file access, the 128 GB SSD storage is just what you need.  <br><br>
 
Good to know  <br><br>
 
- With a battery life of up to 7.5 hours your movie marathons won't need charging breaks <br>
- Fast-charging means you can fuel it from 0 to 50% in about 45 minutes <br>
- You're all sorted for ports, with USB A, C, and HDMI all on board <br>
- Expand, save, and access your data with ease thanks to its SD and Micro SD card reader <br>
- Set up your home office anywhere – the anti-glare display won't mind some sunlight <br>
- The dual speakers let you catch up on your favourite shows or put on some tunes 

  
` ,
    image: "Images/HP",
},
{
    id: 15,
    title: "HP Pavilion 24-cr1007na 23.8 All-in-One PC - Intel® Core™ Ultra 5, 1 TB SSD",
    price: "£699.00",
    description: `Product code: 713161 <br><br>

By packing all the hardware into a single monitor,
 this HP Pavilion PC gives you all the power you need while saving space on your desk.
  Get the most out of your content with the 24” IPS LCD display. 
  The Full HD resolution shows sharp detail and clarity, and the three-sided micro-edge design means
   you won't get distracted by chunky borders. The Intel® Core™ Ultra 5 inside will give you plenty 
   of power for editing documents, streaming TV shows and multitasking. <br><br>
 
Good to know <br><br>
 
- Only be seen when you want to - the Full HD webcam has a privacy shutter for peace of mind <br>
- Windows Hello facial recognition lets you sign in with just a smile, no need to type your password over and over <br>
- The 1 TB SSD is plenty of space for your important photos and files <br>
- A wireless mouse and keyboard are included in the box, so you can get set up straight away <br>
- It's made using sustainable materials, including ocean-bound and post-consumer recycled plastic <br>
- Stay productive with Windows 11 and it's improved Start menu and multi-tasking tools 
  
` ,
    image: "Images/HP2",
},
{
    id: 16,
    title: "HP Stream 14s-dq0508sa 14 Laptop - Intel® Celeron®, 128 GB SSD",
    price: "£159.00",
    description: `Product code: 647450 <br><br>

Work and play on the go with this HP. It's slim and lightweight
 - just 1.4 kg - so it'll pop into your bag without weighing you down. 
 The 13th gen Intel® Core™ i5 processor has plenty of power to keep things running smoothly.
  And the battery can last up to 9 hours, which makes it great for working in cafes or libraries. 
  When you do finally run out charge, HP fast charging gets it back to 50% in only 45 minutes.
   Just long enough for a well-deserved break! <br><br>
 
Good to know <br><br>
 
- 8 GB of RAM lets you run multiple apps at the same time and loads of browser tabs <br>
- Its Full HD screen and dual front-facing speakers are great for kicking back with a movie <br>
- 512 GB of SSD storage will give you speedy access to all your essentials <br>
- The Full HD webcam is perfect for work or family calls <br>
- Load up websites and videos in no time thanks to WiFi 6 <br>
- You're all sorted for ports, with USB A, C, and HDMI all on board <br>
- Set up your home office anywhere – the anti-glare display can handle a bit of sunlight 

` ,
    image: "Images/HP3",
},
{
    id: 17,
    title: "LENOVO IdeaPad Slim 3 14 Chromebook - MediaTek Kompanio 520",
    price: "£149.00",
    description: `Product code: 731546<br><br>
At just 1.3 kg, you'll barely know this Chromebook is in your backpack.
 So you can get productive anywhere you want – library, park, café. 
 ChromeOS lets you pick up all your must-have apps on the Google Play store
  - from Office to Netflix. And you get a smooth, streamlined experience with absolutely crazy battery life.
   This Slim 3 lasts for up to 13.5 hours, so you've got enough juice for a full day's work and a movie (or two).<br><br>

Good to know<br><br>

- Friends and family will see you clearly on the Full HD webcam - for everyone else, there's a privacy shutter<br>
- The octa-core MediaTek processor is just right for everyday browsing, emailing and social media<br>
- From word docs to Netflix, content will be crisp and detailed on the Full HD display<br>
- ChromeOS is stable and efficient, so 4 GB of RAM will be plenty for all your everyday needs<br>
- The front-facing stereo speakers are handy for showing videos to friends<br>
- Chromebooks are less likely to get viruses, and they come with Google's H1 Security Chip<br>



` ,
    image: "Images/Lenovo2",
},

{
    id: 17,
    title: "LENOVO IdeaPad Slim 3 14 Chromebook - MediaTek Kompanio 520",
    price: "£149.00",
    description: `Product code: 731546<br><br>
At just 1.3 kg, you'll barely know this Chromebook is in your backpack.
 So you can get productive anywhere you want – library, park, café. 
 ChromeOS lets you pick up all your must-have apps on the Google Play store
  - from Office to Netflix. And you get a smooth, streamlined experience with absolutely crazy battery life.
   This Slim 3 lasts for up to 13.5 hours, so you've got enough juice for a full day's work and a movie (or two).<br><br>

Good to know<br><br>

- Friends and family will see you clearly on the Full HD webcam - for everyone else, there's a privacy shutter<br>
- The octa-core MediaTek processor is just right for everyday browsing, emailing and social media<br>
- From word docs to Netflix, content will be crisp and detailed on the Full HD display<br>
- ChromeOS is stable and efficient, so 4 GB of RAM will be plenty for all your everyday needs<br>
- The front-facing stereo speakers are handy for showing videos to friends<br>
- Chromebooks are less likely to get viruses, and they come with Google's H1 Security Chip<br>



` ,
    image: "Images/Lenovo2",
},
{
    id: 18,
    title: "SAMSUNG Galaxy Book3 360 13.3 2 in 1 Laptop",
    price: "£549.00",
    description: `Product code: 381078<br><br>
The Galaxy Book3 360 will bend over backwards to fit your style of work.
 Its 360° rotating hinge lets you use it as a laptop, tablet, or anything in-between. 
 Samsung squeezed in a 13th gen Intel® Core™ i5 processor with 12 cores, so it will speed through your workloads.
  And when you're done being productive, the Full HD AMOLED touchscreen is perfect for kicking back with a movie. 
  Crisp detail, bold colours and deep contrast – it's got it all! And with Intel® Iris® Xe Graphics on board, 
  you can even take on creative task or blow off steam with some gaming.<br><br>

Good to know<br><br>

- Thanks to the AKG speakers with Dolby Atmos support you'll hear every footstep in your favourite show<br>
- The Full HD webcam will make you stand out on your next video call with its sharp resolution, AI noise cancelling and auto framing<br>
- The included S-Pen stylus gives you precise control over the touchscreen - great for taking handwritten notes or making drawings<br>
- The battery that will keep on going for up to 20 hours, so you can wave battery anxiety goodbye<br>
- Multitask away with 8 GB of RAM - you can switch between apps without lag<br>
- WiFi 6E means lightning-fast internet connection for smooth browsing and streaming<br>
- There're two Thunderbolt 4 ports that let you connect 8K monitors or super-fast SSDs<br>
- The laptop's incredibly thin and weighs under 1.2 kg – you'll barely know it's in your bag



` ,
    image: "Images/Samsung2",
},
{
    id: 19,
    title: "APPLE MacBook Pro 14 (2024) - M4, 1 TB SSD",
    price: "£1559.00",
    description: `Product code: 399457<br><br>
The 14inch MacBook Pro with M4 chip gives you spectacular performance. 
This powerhouse is built for Apple Intelligence. With up to 24 hours of battery life you can work and create all day.
 And the breathtaking Liquid Retina XDR display's got peak brightness up to 1,600 nits. So it's pro in every way.<br><br>

Good to know<br><br>

- The M4 chip brings spectacular speed and capability to blaze through everyday activities and multitask across multiple productivity and pro apps<br>
- Apple Intelligence is the personal intelligence system that helps you write, express yourself and get things done effortlessly. With groundbreaking privacy protections, it gives you peace of mind that no one else can access your data — not even Apple<br>
- The 14inch MacBook Pro delivers the same exceptional performance whether it's running on battery or plugged in<br>
- All your favourites, including Microsoft 365 and Adobe Creative Cloud, run lightning fast in macOS<br>
- Mac works like magic with your other Apple devices. View and control what's on your iPhone from your Mac with iPhone Mirroring. Copy something on iPhone and paste it on Mac. Send texts with Messages or use your Mac to make and answer FaceTime calls<br>
- The 14.2-inch Liquid Retina XDR display6 features 1,600 nits peak brightness and up to 1,000 nits sustained brightness, 1,000,000:1 contrast<br>
- Stay perfectly framed and sound great with a 12MP Center Stage camera, three studio-quality mics and six speakers with Spatial Audio with support for Dolby Atmos<br>
- The 14inch MacBook Pro features three Thunderbolt 4 ports, a MagSafe 3 charging port, SDXC card slot, HDMI port and headphone jack. And it supports up to two external displays<br>
- Every Mac comes with robust defences against viruses and malware. If your Mac is lost or stolen, Find My can help you get it back. FileVault makes sure your files are encrypted so others cannot access them. And free security updates help keep your Mac protected



` ,
    image: "Images/MacBookAir2",
},

{
    id: 20,
    title: "LENOVO IdeaPad Slim 3i 14 Chromebook Plus - Intel® Core",
    price: "£249.00",
    description: `Product code: 728081<br><br>
This Lenovo Chromebook Plus is a great pick for students. 
It's powered by an Intel® Core™ i3processor, so it can handle productivity apps with ease.
 8 GB of RAM is perfect for multitasking - you can switch between multiple tabs without missing a beat.
  You can stash it in your bag because it only weighs 1.5 Kg. And it's military grade metal finish protects is from drops, 
  spills and scratches.<br><br>

Good to know<br><br>

- With up to 11 hours of battery life, you don't even have to worry about bringing a charger<br>
- The Full HD display is crisp and detailed, so Netflix binging's a delight<br>
- ChromeOS is super easy to use and you can still get all your must-have apps on the Google play store<br>
- Connect to big screens with HDMI and plug in devices with the speedy USB 3.2 ports<br>
- WiFi 6E gives you a rock-steady and super-fast internet connection<br>
- Thanks to the Full HD webcam, you'll be looking sharp in all your video calls


` ,
    image: "Images/Lenovo3",
},



];


if (typeof module !== 'undefined') {
    module.exports = products;
}
  