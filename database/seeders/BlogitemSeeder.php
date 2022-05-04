<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Blogitem;
use App\Models\BlogitemAuthor;

class BlogitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogitems')->delete();

        $blogitem = Blogitem::create(
            [
                "title" => "Sickle Cell Health Tips For Harmattan",
                "brief" => "We are once again in the thick of harmattan. The weather is cold and dry, and there is a lot of dust in the air. What can we do to minimize the effects it has on people with Sickle Cell? During this season the weather can be very unpredictable. During the day it can get",
                "body" => "<p>We are once again in the thick of harmattan. The weather is cold and dry, and there is a lot of dust in the air. What can we do to minimize the effects it has on people with Sickle Cell?</p>

                <p>During this season the weather can be very unpredictable. During the day it can get sweltering, and at night it can get frigid. In all situations, it is essential to stay hydrated. With the dryness in the atmosphere, it is very easy to lose fluids. Just because you do not, sweat does not mean you are hydrated. As much as possible, drink lots of fluids. When you are going out, take a bottle of water with you. This is very important for children since they are very active and are always running around and playing. Make sure they stay hydrated as much as possible.</p>

                <p>It is crucial to stay warm, as well. Wearing more than one layer of clothing will go a long way to keep you warm. If possible, take a jacket or sweater with you when you leave the house. Avoid cold foods and drinks where possible. For children, make sure they are bundled up. Since they are young, don’t know the importance of this, but you should insist on it. Avoid sleeping with the AC or fan at night. The temperatures tend to drop at night. Also, take baths with warm water when the weather is cold.</p>

                <p>Get as much rest as possible. Take naps when you can. The more rest you get, the better. It reduces your stress levels and keeps you healthy. When your body is stressed, it is hard for it to fight infections, and you will feel more tired than usual. Proper rest will go a long way to keep you healthy. Grab a good book, watch a good movie. Encourage your children to take naps as well. They expend a lot of energy during the day, so a good nap will really help them.</p>

                <p>Always use moisturizers and lip balms. They prevent dryness and helps reduce dehydration. The dry conditions can lead to cracked skin and lips, which tend to be quite painful. Shea butter is a useful local moisturizer, and it is readily available almost everywhere. </p>

                <p>And last but not least, make sure you take your medications regularly. Without this, everything else will not be beneficial. Stock up on your medications before they get finished. Always make sure you have extra stock in case of emergencies.</p>",
                "category_id" => 1,
                "ref" => "team-work-is-expedient",
                "author_id" => 2,
                "listing_date" => "2020-01-09",
                "image_id" => 8,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 2, "added_by_id" => 1]);
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 4, "added_by_id" => 1]);
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 5, "added_by_id" => 1]);

        $blogitem = Blogitem::create(
            [
                "title" => "What Is Sickle Cell Disease",
                "body" => "<p>Definition:<br/>
                Sickle Cell Disease is an inherited blood disorder that affects Red Blood Cells. People with Sickle Cell Disease have Red Blood Cells that contain haemoglobin S, an abnormal type of haemoglobin.</p>
                
                <p>Haemoglobin is the substance within Red Blood Cells that carry oxygen from the air into our lungs and to all parts of the body.</p>
                
                <p>Normal Red Blood Cells contain haemoglobin A. These are soft and disc-shaped and can squeeze through tiny blood vessels. They usually live for about 120 days before new ones replace them.</p>
                
                <p>People with Sickle Cell Disease make a different form of haemoglobin called haemoglobin S. Red Blood Cells containing mostly haemoglobin S are stiff, distorted in shape and have difficulty passing through the body’s small blood vessels. They also have a shorter lifespan (about 16 days) than normal Red Blood Cells.</p>
                
                <p>When sickle-shaped cells block small blood vessels, less blood can reach that part of the body.
                Tissues that do not have normal blood flow eventually become damaged.</p>
                
                <p>Incidence:<br/>
                Globally, 300 to 400 thousand babies are born with Sickle Cell Disease each year, more than half of whom are in Sub-Saharan Africa.<br/>
                Sickle Cell occurs in about 1 in every 500 African-American births, and about 2 million Americans or 1 in 12 African Americans carry the sickle cell trait.<br/>
                Thirty percent (1 in 3) of Ghanaians have the Sickle Cell trait, and 2 percent of children born in Ghana annually have Sickle Cell Disease.<br/>
                Inheritance:<br/>
                Sickle Cell is inherited from parents in much the same way as blood type, hair colour and texture, eye colour and other physical traits. The types of haemoglobin a person makes in the Red Blood Cells depend upon what haemoglobin genes the person inherits from his or her parents. Like most genes, haemoglobin genes are inherited in two sets, one from each parent.</p>
                
                <p>Examples:<br/>
                If one parent has Sickle Cell Anemia (SS disease) and the other is Normal (AA), all of the children will have sickle cell trait (AS).<br/>
                If one parent has Sickle Cell Anemia (SS) and the other has Sickle Cell Trait (AS), there is a 50% chance of having a baby with either Sickle Cell Anaemia (SS) or Sickle Cell Trait (AS) with each pregnancy.<br/>
                When both parents have Sickle Cell Trait (AS), they have a 25% chance of having a baby with Sickle Cell Disease with each pregnancy.</p>
                
                <p>Types of Sickle Cell Disease:<br/>
                There are several types of Sickle Cell Disease. The most common are:<br/>
                Haemoglobin SS Disease – Sickle cell anaemia.<br/>
                Haemoglobin SC Disease.<br/>
                Sickle Beta-Plus Thalassaemia.<br/>
                Sickle Beta-Zero Thalassaemia.</p>
                <p>References:<br/>www.blackdoctor.org<br/>www.sicklecelldisease.org</p>",
                "category_id" => 1,
                "ref" => "team-work-is-expedient",
                "author_id" => 2,
                "listing_date" => "2019-07-24",
                "image_id" => 1,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 2, "added_by_id" => 1]);
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 3, "added_by_id" => 1]);
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 6, "added_by_id" => 1]);

        $blogitem = Blogitem::create(
            [
                "title" => "World Sickle Cell Day 2019; 10 Years of Global Awareness, Advocacy & Education.",
                "body" => "<p>Sickle Cell Disease (SCD) is a genetic disorder affecting 300 to 400 million adults and children worldwide. 65% of Sickle Cell Disease carriers are in Sub-Saharan Africa. Research indicates that about 90% of children born with Sickle Cell Disease in sub-Saharan Africa die before the age of 5 years.</p>

                <p>People who have Sickle Cell Disease are born with an abnormal type of haemoglobin (S); the protein in Red Blood Cells (RBC) that carries oxygen around the body. The presence of the “S” haemoglobin and any other abnormal haemoglobin makes the diagnosis of SCD. Thus people who are SS, SC, SE etc. have Sickle Cell Disease. The presence of abnormal haemoglobin in the presence of normal haemoglobin “A” is termed Trait or Carrier. These include AS, AC etc. A person who has the sickle cell trait does not have the sickle cell disease, they generally do not have symptoms of SCD, but can pass the abnormal haemoglobin to their child and may have a child with sickle cell disease if their partner also has the sickle cell trait.</p>
                
                <p>In SCD, the abnormal RBCs become sickle/crescent-shaped, hard and stiff. These get stuck in small blood vessels in different parts of the body, obstruct blood flow and deprive various parts of the body of oxygen. This blockage causes pain and injury to all organs of the body.</p>
                
                <p>Sickle Cell Disease has become the foremost genetic disease worldwide. However, when diagnosed early and managed appropriately patients experience a better quality of life. Advancement in research and care also ensure that some patients are cured through Bone Marrow Transplants and Gene Therapy.</p>
                
                 
                
                <p>World Sickle Cell Day was instituted by the United Nations General Assembly in 2008 to increase the awareness about SCD and its cure among the public, and it was celebrated first time on 19th of June in 2009.</p>
                
                <p>Over the past decade, World Sickle Cell Day has had different themes annually, reflecting global objectives:</p>
                
                 
                
                <p>2009: An Approach to Public Health — the Sickle Cell Burden</p>
                
                <p>The burden of SCD is real. From forcing sufferers to live different lifestyles compared to their friends, to pain crises. With the year 2009, the Sickle Cell community decided to take a more public approach to the burden of sickle cell and try to inform as many people about it as possible. There’s still a lot that has to be done with informing and educating people on sickle cell disease since there are still a lot of misconceptions, such as the disease being contagious and spiritual. A lot of persons living with SCD are stigmatised for being different. A lot more has to be done with educating the public on the condition.</p>
                
                <p>2010: Hope, Education and Awareness</p>
                
                <p>Hope is defined as a feeling of expectation and desire for a particular thing to happen. In everything, it is essential to keep hope alive. Hope for a cure for sickle cell, hope for better training for doctors and better resources. It is also essential to educate people on Sickle Cell Disease so they’re better equipped to help out their loved ones living with the condition who may be going through difficult situations. It is also important to increase awareness of SCD. A lot more work needs to be done in the education and awareness aspects by the sickle cell community, however, we are keeping hope alive daily.</p>
                
                <p>2011: Come together and Educate</p>
                
                <p>The theme of sickle cell day for this year called for the whole community to come together and educate the population on Sickle Cell Disease. As with raising awareness, a lot of work is still left to do here in regards to educating the public on sickle cell disease.</p>
                
                <p>2012: Keep Hope Alive</p>
                
                <p>The theme called the community not to lose hope when it comes to the fight against sickle cell. It is something we as a community do daily. We keep hope alive, knowing that soon, there would be better resources for the treatment of sickle cell disease. Maybe even a more affordable and accessible cure.</p>
                
                <p>2013: Know Your Sickle Cell Status</p>
                
                <p>The theme for this year called everyone to know their Sickle Cell Status. The importance of this is to end the cycle of people giving birth to children with Sickle Cell Disease. It is important to know your status and then make informed decisions with your life partner. A lot of work still needs to be done in this regard especially in sub- Saharan Africa. Ghana, for example, has not seen a significant decline in the 15,000 annual births of children with SCD in the past decade.</p>
                
                <p>2014: Break the Silence on Sickle Cell Disorder</p>
                
                <p>In 2014, the sickle cell community was called to be more vocal about the condition, which is currently being done but has more room for improvement.</p>
                
                <p>2015: For Sickle Cell Disease to stop being ignored you must STOP YOUR SILENCE and SHARE YOUR TRUTH</p>
                
                <p>The theme for this year called for the sickle cell community to be more vocal about sickle cell disease again.</p>
                
                <p>2016: Exhibit Courage and Address Ineffective Areas of Support</p>
                
                <p>When it comes to sickle cell support, there seem to be a lot of unaddressed issues. From healthcare which isn’t</p>
                
                <p>2017: Break the Sickle Cycle</p>
                
                <p>With this theme, people were being called to break the cycle of sickle cell and its occurrence among us. Young couples are to be pre-tested to break the cycle of sickle cell. This goes back to the amount of education that needs to be done to help prevent  Sickle Cell.</p>
                
                <p>2018: SCD: Walk For Hope</p>
                
                <p>In 2018, the theme “Walk For Hope” called for the community to walk and keep the hope alive for the solution to sickle cell.</p>
                
                <p>For World Sickle Cell Day 2019, after a decade of World Sickle Cell Day commemorations, we look back at Ten Years of Awareness, Advocacy and Education and continue to ask what are key success indicators, what are the lessons learnt and what has been the impact of these commemorations?</p>
                
                <p>In Ghana over the past decade, there has been no concerted effort in the commemoration of World Sickle Cell Day on a national level. Unlike other conditions such as Diabetes, Malaria, HIV and Tuberculosis which have national programmes that coordinate activities related to these conditions in the country, Sickle Cell Disease continues to be left in the shadows without a national agency specifically mandated for this purpose.</p>
                
                <p>Beyond symposia and lectures organized by associations and corporate organizations, medical screenings, genotype testing and health walks organized by NGOs, not much can be said for our World Sickle Cell Day efforts over the decade. Even more saddening is the lack of collaboration and integration between governmental agencies, clinicians and NGO all supposedly working for a common goal.</p>
                
                <p>We can only hope that in the next decade the strengths of various stakeholders will be mobilized and all,including patients, advocates, NGOs, clinicians, researchers etc. will be invited to the table to work for the common good of the public.</p>
                
                <p>No single individual, association, foundation or organization is the citadel of all knowledge. We look forward to greater collaboration in the next decade and impact from the various activities and programmes organized.</p>
                
                <p>This year, we encourage you to join the many Sickle Cell Disease organiZations in Ghana in commemorating this important Day. Join the Sickle Cell Foundation and Association on Wednesday June 19, at 5pm at the Ghana College of Physicians and Surgeons in a symposium titled “Blood is thicker than water”.<br/>
                Peer Foundation on June 19th and 22nd in Takoradi for a health talk and medical screening; The Ghana Institute of Clinical Genetics (Sickle Cel Clinic), KorleBu on Saturday 22nd June at 6am for a health walk, aerobics and health education and on Sunday June 23rd join the Sickle Life support group in collaboration with SCAI, Sickle Strong Warrior Foundation and Sickle Cell Awareness Ghana at 1pm at KFC Osu for a support group meeting and fallen warriors remembrance event.</p>
                
                <p>Know your genotype, make an informed decision.</p>",
                "category_id" => 1,
                "ref" => "team-work-is-expedient",
                "author_id" => 4,
                "listing_date" => "2019-06-19",
                "image_id" => 7,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 1, "added_by_id" => 1]);
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 8, "added_by_id" => 1]);

        $blogitem = Blogitem::create(
            [
                "title" => "World Sickle Cell Day 2019",
                "body" => "<p>World Health Days are an essential part of public health policy. They provide opportunity for raising awareness and mobilizing local and international support for a wide spectrum of medical conditions.</p>

                <p>Sickle Cell Disease is a potentially fatal disease and one of the main causes of premature death amongst children under the age of five in many African countries (WHO).</p>
                
                <p>World Sickle Cell Day was instituted by the United Nations General Assembly in 2008 to increase awareness about Sickle Cell Disease and its management among the public. It was celebrated for the first time on June 19, 2009. Annual commemorations following this have further sought to increase public knowledge about the condition.</p>
                
                <p>The United Nations resolution on Sickle Cell Disease UN A/63/L.63 include:
                <ol>
                <li>The United Nations recognizes that Sickle Cell Anaemia is a public health problem.</li>
                <li>The United Nations highlights why it is necessary to raise awareness about Sickle Cell Anaemia and to eliminate the prejudices associated with it.</li>
                <li>The United Nations urges member states to raise awareness of Sickle Cell Anaemia on June 19 each year at both national and international levels.</li>
                <li>The United Nations encourages member states, its own agencies, funds, and programmes, as well as international institutions and development partners to support health systems and health care delivery as well as efforts to improve the management of Sickle Cell Anaemia.</li>
                <li>The United Nations invites Member States and international organizations to support the efforts being made to combat Sickle Cell Anaemia and to encourage basic and applied research on the disease.
                <li>In Member States where Sickle Cell Anaemia is a public health problem, the United Nations encourages the establishment of national programmes and specialized centres for the treatment of Sickle Cell.</li>
                <li>The United Nations requests the Secretary-General to bring the present resolution to the attention of all Member States and organizations of the United Nations system.</li>
                </ol>
                </p>
                
                <p>#WorldSickleCellDay<br/>
                #SickleLife</p>",
                "category_id" => 1,
                "ref" => "team-work-is-expedient",
                "author_id" => 3,
                "listing_date" => "2019-06-06",
                "image_id" => 9,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 1, "added_by_id" => 1]);
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 9, "added_by_id" => 1]);
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 10, "added_by_id" => 1]);

        $blogitem = Blogitem::create(
            [
                "title" => "Sickle Cell Health Tips For Harmattan",
                "body" => "",
                "category_id" => 1,
                "ref" => "team-work-is-expedient",
                "author_id" => 4,
                "listing_date" => "January 9, 2020",
                "image_id" => 1,
                "show_from_date" => "2022-01-01",
                "show_till_date" => "2023-01-01",
            ]
        );
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 6, "added_by_id" => 1]);
        BlogitemAuthor::create(["blogitem_id" => $blogitem->id, "author_id" => 7, "added_by_id" => 1]);
    }
}
