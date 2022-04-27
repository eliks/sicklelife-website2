<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_members')->delete();

        DB::table('team_members')->insert(
            [
                "name" => "Dr. Sefakor Enam Bankas",
                "image_url" => "template/team/dr_sefakor_enam_bankas2.png",
                "role" => "Founder and Managing Director",
                "bio" => "<p><b>Reason for interest in Sickle Cell / joining Sickle Life:</b><br>
                I am person living with Sickle Cell Disease, health advocate and medical doctor and have experienced this condition through several perspectives which have exposed several gaps in the Sickle Cell Disease space locally.<br>
                I founded Sickle Life to bridge the existing gaps in Advocacy, management and research in Sickle Cell Disease in Ghana. </p>
                
                <p><b>What you hope to achieve through Sickle Life:</b><br>
                Increase awareness about Sickle Cell Disease among the public and empower them to make informed decisions about the condition.
                Educate persons living with Sickle Cell Disease about the condition to improve health seeking behaviour and quality of life.<br>
                Improve standards of care and management of Sickle Cell Disease nationally</p>",
                "sort_rank" => 1,
                "sm_facebook" => "https://www.facebook.com/bankas",
                "sm_linkedin" => "https://www.linkedin.com/in/enam-sefakor-bankas-7a2031116/",
                "sm_twitter" => "https://twitter.com/BankasMD",
                "sm_instagram" => "https://www.instagram.com/bankas_md/",
            ]
        );

        DB::table('team_members')->insert(
            [
                "name" => "Veronica Owusu",
                "image_url" => "template/team/vero.png",
                "role" => "Administrative Assistant",
                "bio" => "<p><b>Joining Sickle Life:</b> <br>
                    I always love new challenges. So when a past admin approached me about this role, I was eager to take it. I have learnt new things about Sickle Cell Disease and have been able to broaden my administrative skills.</p>
                <p><b>Hopes:</b> <br>
                I’ll like to put in my share of the work to see our vision of establishing a safe haven for persons living with SCD come to pass and in the process grow and be inspired by the lives I touch.</p>",
                "sort_rank" => 2,
                "sm_facebook" => "https://m.facebook.com/veronica.owusu.3304",
                "sm_linkedin" => "https://www.linkedin.com/in/veronica-owusu-1b548114a/",
                "sm_twitter" => "https://twitter.com/NanaAkuaVee",
                "sm_instagram" => "https://www.instagram.com/nanaakuavee/",
            ]
        );

        DB::table('team_members')->insert(
            [
                "name" => "Prisca Dede Tetteh",
                "image_url" => "template/team/prisca.png",
                "role" => "Support Group Administrator",
                "bio" => "<p><b>Joining Sickle Life:</b> <br>
                I am a Sickle Cell Patient so if I have to advocate and volunteer for a group of people, it should be with people I understand and share in their ordeal. That is why I joined Sickle Life.</p>
                <p><b>Hopes:</b> <br>
                I will like to join forces with my other colleagues in Sickle Life to make Team Sickle Life the number one SCD advocate group in Ghana.</p>",
                "sort_rank" => 3,
                "sm_linkedin" => "https://www.linkedin.com/in/prisca-dede-tetteh-a45a2920a/",
                "sm_twitter" => "https://twitter.com/TettehPrisca",
                "sm_instagram" => "https://www.instagram.com/prisca_mizworld/",
            ]
        );

        DB::table('team_members')->insert(
            [
                "name" => "Naomi  Akom Okadja",
                "image_url" => "template/team/naomi.png",
                "role" => "Support Group and Welfare Administrator",
                "bio" => "<p><b>Joining Sickle Life:</b> <br>
                Since I am a person living with SCD I  deemed it fit to assist in advocacy in every way I can, to educate people on the disease.</p>
                <p><b>Hopes:</b> <br>
                To be able to reach lots of people with less knowledge of SCD and also mentor people living with the disease.</p>",
                "sort_rank" => 4,
                "sm_facebook" => "https://www.facebook.com/maadwoa.nhyira.7",
                "sm_linkedin" => "https://www.linkedin.com/in/naomi-akom-okadja-448789203",
                "sm_instagram" => "https://www.instagram.com/maadwoanhyira3332/",
            ]
        );

        DB::table('team_members')->insert(
            [
                "name" => "Serian Emefa Agbenya",
                "image_url" => "template/team/emefa2.png",
                "role" => "Marketing and Branding",
                "bio" => "<p><b>Joining Sickle Life:</b> <br>
                To be an advocate and to educate the general public about the condition and to make informed choices since I grew up watching my friend living with the condition and the pain and stress it comes with it but she was able to achieve her aims without been limited with her condition. It made me admire her willingness to fight on so it made me join Sickle Life so I can encourage persons living with SCD not to give up their dreams since they can achieve their dreams if they put their minds to it without making the condition define who they really are and what they want to become in future.</p>
                <p><b>Hopes:</b> <br>
                To encourage and be a source of hope for persons living with SCD 
                To increase awareness about Sickle Cell Disease among the public and empower them to make informed decisions about the condition.
                To be a voice for persons living with SCD so that there shall be policies structured to suit their needs when it comes to living with SCD.</p>",
                "sort_rank" => 5,
                "sm_facebook" => "https://www.facebook.com/qemiesea",
                "sm_linkedin" => "https://www.linkedin.com/in/serian-agbenya-a9b1ab90/",
                "sm_instagram" => "https://www.instagram.com/qeme_sea/",
            ]
        );

        DB::table('team_members')->insert(
            [
                "name" => "Nathaniel Dela Seneadza",
                "image_url" => "template/team/nathaniel.png",
                "role" => "Programs Team Lead",
                "bio" => "<p><b>Joining Sickle Life:</b> <br>
                Growing up, I had a same name cousin who struggled with episodes of SCD. Back then, I had no idea what it was. He passed on while about 30. At work, I had the opportunity to work with a warrior that inspired me to develop interest in knowing more about SCD. There is nowhere to know more than being part of the family that constantly share their own experiences.</p>
                <p><b>Hopes:</b> <br>
                I wanted to just do something to support the works of SickleLife. I started attending programs and then became a delivery guy. I availed myself for any service and then I was invited to be part of the organization's welfare administrators and subsequently joined the administrative team as Team Lead for programs. The more I get involved and learn about the condition, the more my urge to serve grows. It is my desire to see SickleLife expand its membership across the country and transform lives to acknowledge that SCD cannot be a limitation to attaining their potentials.</p>",
                "sort_rank" => 7,
                "sm_facebook" => "https://www.facebook.com/dela.seneadza",
                "sm_linkedin" => "ttps://www.linkedin.com/in/nathaniel-dela-seneadza-a580a9201",
            ]
        );

        DB::table('team_members')->insert(
            [
                "name" => "Ruth Owusu Boateng",
                "image_url" => "template/team/ruth.png",
                "role" => "Marketing and Branding",
                "bio" => "<p><b>Joining Sickle Life:</b> <br>
                To help create awareness of the disease to the larger people. Most people have little or no idea about the condition, making them sometimes stigmatize people living with the disease. I joined to help reach out to a lot of people through health education and screening programs, to educate them and also help them know their genotype.</p>
                <p><b>Hopes:</b> <br>
                Hope to achieve: I’m hopeful that through the health education and screenings, more people will get to know their genotypes and make informed choices when choosing marriage partners. And also hoping that with time, the stigmatization will reduce and people living with the disease will receive the optimum medical care for recovery during crisis.</p>",
                "sort_rank" => 8,
                "sm_facebook" => "https://www.facebook.com/maame.owusuboateng",
                "sm_linkedin" => "https://www.linkedin.com/in/maame-agyekumwaa-owusu-boateng-8b088214b/",
                "sm_instagram" => "https://www.instagram.com/akosuah_agyekumwaa/",
                "sm_twitter" => "https://twitter.com/Agyekumwaa11"
            ]
        );

        DB::table('team_members')->insert(
            [
                "name" => "Felix Amanor Otu",
                "image_url" => "template/team/felix.png",
                "role" => "Business and Finance",
                "bio" => "<p><b>Joining Sickle Life:</b> <br>
                As a person thriving with SCD I want to be a voice of hope to other persons living with SCD. I want to contribute to the research on how the lives of persons living with SCD can be improved and how health workers can better understand SCD patients. I believe this is how I can contribute to addressing some of the social inequities in our health care system with focus on persons living with SCD.</p>
                <p><b>Hopes:</b> <br>
                To make SickleLife the support system and safe place for persons living with SCD. A place where persons living with SCD can freely share their experiences and meaningfully contribute to the body on knowledge on SCD.</p>",
                "sort_rank" => 9,
                "sm_facebook" => "https://www.facebook.com/felix.a.otu",
                "sm_linkedin" => "www.linkedin.com/in/felix-amanor-otu",
                "sm_instagram" => "https://www.instagram.com/nene_amanor",
            ]
        );

        DB::table('team_members')->insert(
            [
                "name" => "Sefakor Aku Biddah",
                "image_url" => "template/team/sefakor.png",
                "role" => "Programs",
                "bio" => "<p><b>Joining Sickle Life:</b> <br>
                Desire to help educate and create awareness for the sickle cell disease</p>
                <p><b>Hopes:</b> <br>
                To have a lot of people educated about the disease through our social initiatives and interventions</p>",
                "sort_rank" => 10,
                "sm_facebook" => "https://www.facebook.com/sefakor.boadu",
                "sm_linkedin" => "http://linkedin.com/in/sefakor-biddah-6a02a5213",
            ]
        );
    }
}
