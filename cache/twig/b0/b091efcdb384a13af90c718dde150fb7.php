<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/04.associate-members/associate-members-2016-2017 */
class __TwigTemplate_2b293121aebaf14fbabef6552ba59980_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<table>
<thead>
<tr>
<th>Associate Members List 2017-18</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>ISLAMABAD</strong></td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Rana Marble</td>
<td>M.Sohail Rana</td>
<td>Plot-414, I-9 Islamabad.</td>
</tr>
<tr>
<td>2</td>
<td>Orient Marble</td>
<td>Haji M. Aslam</td>
<td>Plot-84, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>3</td>
<td>Star Marble Tiles</td>
<td>Mian Abdul Sami</td>
<td>Plot-215,St-7,I-9/3, Islamabad</td>
</tr>
<tr>
<td>4</td>
<td>Saeed Marble</td>
<td>Haroon Rashid</td>
<td>Plot 137-C, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>5</td>
<td>National Marble Industry.</td>
<td>Naeem Mughal</td>
<td>Plot-137/D, I-9/2, Islamabad</td>
</tr>
<tr>
<td>6</td>
<td>Star Marble Industry</td>
<td>Aqeel Ahmed</td>
<td>Plot-40-41, I-9/2,Islamabad.</td>
</tr>
<tr>
<td>7</td>
<td>Citi Marble</td>
<td>Ch Abdul Khaliq</td>
<td>Plote# 277, Street#2,I-9/3 Islamabad.</td>
</tr>
<tr>
<td>8</td>
<td>Unique Marble</td>
<td>Yaseen</td>
<td>Plot-253-B, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>9</td>
<td>Swat Marble Industry</td>
<td>Imran Khan (61101-1732788-1) / Sher Afsar</td>
<td>Plot-137-H, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>10</td>
<td>Iram Marble</td>
<td>Imtiaz Amjad</td>
<td>Plot-114,St-15,I-9/2, Islamabad</td>
</tr>
<tr>
<td>11</td>
<td>New Bagh Marble Industry</td>
<td>Nasir Khan</td>
<td>Plot-42,St-11,I-9/2,Islamabad</td>
</tr>
<tr>
<td>12</td>
<td>Mughal Marble Factory</td>
<td>Saeed Khan</td>
<td>Plot-7,Industrial Area I-9/2, Islamabad.</td>
</tr>
<tr>
<td>13</td>
<td>Naseem Marble.</td>
<td>Naseem Ahmed</td>
<td>Plot-163,St-9, Industrial Area, I-10/3. ISB.</td>
</tr>
<tr>
<td>14</td>
<td>Crescent Marble.</td>
<td>Abid Rasheed.</td>
<td>Plot-274, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>15</td>
<td>Khalid Marble</td>
<td>Khalid Mahmood Mian</td>
<td>14-B I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>16</td>
<td>Pak ONYX Marble</td>
<td>Mian Aamir Majeed</td>
<td>Unit-2, I-9 Markaz, ISB</td>
</tr>
<tr>
<td>17</td>
<td>K-2 Marble.</td>
<td>Shiekh Rizwan.</td>
<td>Plot-126 A,St-15,I-9/2 Islamabad</td>
</tr>
<tr>
<td>18</td>
<td>Farrukh Granite Art</td>
<td>Mian Farrukh majeed</td>
<td>Unit-2, plot # 2/D I-9 Markaz, ISB</td>
</tr>
<tr>
<td>19</td>
<td>Nagina Marble.</td>
<td>Sh. Azmat Ali</td>
<td>2-K Plaza, Unit-6, I-9 Markaz ISB</td>
</tr>
<tr>
<td>20</td>
<td>Hassan Marble.</td>
<td>Muhammad Aftab Qazi.</td>
<td>Plot-375, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>21</td>
<td>Atlas Marble.</td>
<td>Muhammad Waseem Javed</td>
<td>Plot-137/E,I-9 Islamabad.</td>
</tr>
<tr>
<td>22</td>
<td>Stone Master Marble.</td>
<td>Sh. M. Arshad</td>
<td>I-9 Markaz, Islamabad</td>
</tr>
<tr>
<td>23</td>
<td>Variety Stone Care</td>
<td>Mushtaq Ahmed</td>
<td>Marble Plaza, I-9 Islamabad.</td>
</tr>
<tr>
<td>24</td>
<td>Trichmir Marble.</td>
<td>Amirzada Khan</td>
<td>I-9 Markaz, Islamabad.</td>
</tr>
<tr>
<td>25</td>
<td>Farooq Marble &amp; Granite</td>
<td>Tayyab hameed Bhatti (35202-1429397-1)</td>
<td>20-A waraich plaza I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>26</td>
<td>Commercial Engineering.</td>
<td>M. Akram Mughal.</td>
<td>P-256, St-8, I-9/3 Islamabad.</td>
</tr>
<tr>
<td>27</td>
<td>Bajour Marble.</td>
<td>Jalal-ud-Din Akbar</td>
<td>I-9 Markaz, Islamabad.</td>
</tr>
<tr>
<td>28</td>
<td>Ali Marble</td>
<td>Sharafat Ali Shah</td>
<td>Plaza 16-B Shop # 9 Opp Sui Gas Office I-9 Markaz ISB</td>
</tr>
<tr>
<td>29</td>
<td>Al-Syed Trading Company</td>
<td>Syed M Abbass</td>
<td>Shop # 8 Block # 46 Near PIA Building Blue Area Islamabad</td>
</tr>
<tr>
<td>30</td>
<td>SS Marble and Granite</td>
<td>Shah Khan</td>
<td>Shop # 01, Plot # 14-D, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>31</td>
<td>Hussain Trading</td>
<td>Moazzam Saleem (BM)</td>
<td>16-A, Marble Plaza, I-9</td>
</tr>
<tr>
<td>32</td>
<td>Sohail Brothers</td>
<td>Sohail Khan Baber</td>
<td>Plot # 43, St # 11, I-9/2 Islamabad</td>
</tr>
<tr>
<td>33</td>
<td>Al-Mehria Marble &amp; Granite</td>
<td>Muhammad Altaf</td>
<td>Office # 01,K-2 Plaza, I-9 Markaz Islamabad.</td>
</tr>
<tr>
<td>34</td>
<td>King Stone Marble</td>
<td>Ghulam Mustafa.</td>
<td>Off-7, Pothar Plaza, I-9</td>
</tr>
<tr>
<td>35</td>
<td>Kohinoor Marble</td>
<td>Anwar Hussain.</td>
<td>Shop-2, Mehmood Plaza, I-9</td>
</tr>
<tr>
<td>36</td>
<td>Lawari Granite</td>
<td>Muhammad Ishfaq Khan</td>
<td>Shop # 10 Mehmood plaza I-9 Islamabad</td>
</tr>
<tr>
<td>37</td>
<td>Nadar Marble</td>
<td>Iftikhar Ahmad Waraich</td>
<td>Gilani Plaza Shop # 5 I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>38</td>
<td>Natural Marble.</td>
<td>Syed sattar Hussain</td>
<td>Office # 6-B Shaheen Centre I-9 Islamabad</td>
</tr>
<tr>
<td>39</td>
<td>Pakistan Marble.</td>
<td>Haji Bin Yameen</td>
<td>Shop # 6, Talal Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>40</td>
<td>Rehman Tools</td>
<td>Farooq Ahmed</td>
<td>3-414 C, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>42</td>
<td>Swat Marble Factory</td>
<td>Imtiaz Ali</td>
<td>Plot # 137 I-9 Islamabad</td>
</tr>
<tr>
<td>43</td>
<td>Talha Marble &amp; granite</td>
<td>Malik Sajid</td>
<td>Office # 4 Bhati palaza I-9 Islamabad</td>
</tr>
<tr>
<td>44</td>
<td>Marble Art Gallery</td>
<td>Ashiq Mehmood.</td>
<td>Shop-4-5,Mehmood Plaza I-9 markaz Isb.</td>
</tr>
<tr>
<td>45</td>
<td>Pathar Ghar</td>
<td>Muhammad Feroz</td>
<td>Shop # 3 Marble Plaza Near Sui Gas Office i-9 Markaz Islamabad</td>
</tr>
<tr>
<td>46</td>
<td>Amish Marble Industry</td>
<td>M. Irfan Zafar (61101-3495034-7)</td>
<td>Plot # 57 St # 13 Industrial Area I-9/2 Islamabad</td>
</tr>
<tr>
<td>47</td>
<td>Shafi Ullah Marble &amp; Granite</td>
<td>Shafi Ullah</td>
<td>Shop 23,Marble Plaza, 16-A Near CNG Pump, I-9 Islamabad</td>
</tr>
<tr>
<td>48</td>
<td>Thar Mineral Processing Comp</td>
<td>Husain Ahmed</td>
<td>Plot#279 Ind Estate opp Model Town Khutta Rd ISB</td>
</tr>
<tr>
<td>49</td>
<td>Khan Marble</td>
<td>Ahmad Khan</td>
<td>Mehmood Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>50</td>
<td>Babar Marble Industry</td>
<td>Babar Ali</td>
<td>Flat no. 405, Abu Dabi Tower F-11/1 Islamabad.</td>
</tr>
<tr>
<td>51</td>
<td>Anmol Marble</td>
<td>Noor ul wahab</td>
<td>Near sohan signal porani chungi service road, ISB</td>
</tr>
<tr>
<td>52</td>
<td>Shan Granite &amp; Marble.</td>
<td>Asif Manzoor</td>
<td>Unit-7, 2-K Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>53</td>
<td>Shahid Marble</td>
<td>Shahid Ullah</td>
<td>Plot # 14-D shop # 3 Opp: OGDCL I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>54</td>
<td>Parleno Marble</td>
<td>Anwar Muhammad</td>
<td>Shop#9, K-2Plaza I-9 Market Islamabad</td>
</tr>
<tr>
<td>55</td>
<td>Kashif marble</td>
<td>m.razzaq</td>
<td>Shop # 3, Bhatti Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>56</td>
<td>The stone art gallery</td>
<td>Ashiq hussain</td>
<td></td>
</tr>
<tr>
<td>57</td>
<td>Mazhar Shah Marble</td>
<td>Mazhar Shah</td>
<td>shop .2 Mehmood Plaza i-9 Markaz Islamabad.</td>
</tr>
<tr>
<td>58</td>
<td>Stones Valley</td>
<td>Muhammad Ishaq</td>
<td>4th flour Al Falah Tower mini commercial Area Phase 7 Bahria Town Islamabad.</td>
</tr>
<tr>
<td>59</td>
<td>Aashiana Marble &amp; Granite</td>
<td>Ismail Shah</td>
<td>Shop # 8, Mehmood Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>60</td>
<td>Saleem Marble &amp; Granite</td>
<td>Muhammad Saleem</td>
<td>Shop # 10, Bewal Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>61</td>
<td>Malik Marble &amp; Granite</td>
<td>Malik Yaqoob</td>
<td>Office # 2, Plot # 14-D, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>62</td>
<td>Sahal Marble &amp; Granite</td>
<td>Fazal Hussain Khan</td>
<td>Showroom # 1, Bhatti Plaza, i-9 Markaz Islamabad</td>
</tr>
<tr>
<td>63</td>
<td>Daniyal Marble</td>
<td>Anwar Badshah</td>
<td>Shop # 11, Mehmood Plaza i-9 Markaz Islamabad.</td>
</tr>
<tr>
<td>64</td>
<td>Gulls International</td>
<td>Muhammad Younus</td>
<td>K-2 Plaza, I-9 Markaz, Islamabad</td>
</tr>
<tr>
<td>64</td>
<td>Haider Marble</td>
<td>Arshad Ali (61101-1934660-3)</td>
<td>Plot # 375-B, Potohar road, I-9/3 Islamabad</td>
</tr>
<tr>
<td>65</td>
<td>Syed And Khokar Tiles &amp; Granite</td>
<td>S. Mazhar Hussain Rizvi (37405-6984177-1) Muhammad Akmal, Director (37405-5486998-9)</td>
<td>Shop # 2, Bhatti Plaza, I-9 Islamabad</td>
</tr>
<tr>
<td>65</td>
<td>Amir Hamza Marble</td>
<td>Shams Ul Wahab</td>
<td>6-Bewal Plaza, I-9 Markaz, Islamabad</td>
</tr>
<tr>
<td>65</td>
<td>Syed Marble Tiles &amp; Granite</td>
<td>S. Mazhar Hussain Rizvi (37405-6984177-1)</td>
<td>Shop # 10, Potohar Plaza, I-9 Markaz Islamabad</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th></th>
<th></th>
<th><strong>SANGJANI</strong></th>
<th></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Abdullah Marble</td>
<td>Haji M. Abdullah.</td>
<td>G.T. Road, Sangjani. ISB.</td>
</tr>
<tr>
<td>2</td>
<td>A.R. Marble / Rehman Tools</td>
<td>Abdul Rehman</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>3</td>
<td>New Golden Marble.</td>
<td>Mansaf Khan / Hamid Ali</td>
<td>Near Kohistan Petroleum Sangjani Islamabad</td>
</tr>
<tr>
<td>4</td>
<td>Khokhar Marble</td>
<td>Muhammad Ajmal</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td></td>
<td>Ayaz Marble</td>
<td>Sherdil Khan</td>
<td>Near ISD Motorway Interchange Chungi # 26 ISD</td>
</tr>
<tr>
<td>5</td>
<td>Chaudhry Shahzad Marble &amp; Granite</td>
<td>Chaudhry Shahzad</td>
<td>Near Kohistan Petrol Pump,Industrial estate G.T Road Sangjani</td>
</tr>
<tr>
<td>6</td>
<td>Margalla Marble</td>
<td>Malik M.Munir</td>
<td>Toll Plaza Sangjani Islamabad</td>
</tr>
<tr>
<td>7</td>
<td>Sohail Marble</td>
<td>Muhammad Tariq</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>8</td>
<td>Madni Marble &amp; Granite</td>
<td>Noor Rehman</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>9</td>
<td>Samir Khokhar Industry</td>
<td>Muhammad Fiaz</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>10</td>
<td>Mehran Marble</td>
<td>Malik Awan/ Yaseen</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>11</td>
<td>Al Sharif Marble</td>
<td>Imran / Zulfiqar Ahmed</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>12</td>
<td>Frontier Marble Factory</td>
<td>M. Younas</td>
<td>Near Kohistan Petroleum , Sangjani, ISB</td>
</tr>
<tr>
<td>13</td>
<td>Lasani marble Factory</td>
<td>Bin Yameen</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>14</td>
<td>Najeeb Hardware Store</td>
<td>Najeeb-ullah khan Nasir</td>
<td>Marble market, Near Kohistan Pump, G.T Road Sangjani Islamabad</td>
</tr>
<tr>
<td>15</td>
<td>Diamond Marble</td>
<td>Malik Jahangir / Muhammad Waseem</td>
<td>GT Road Near Shell Petrol Pump, Sangjani Islamabad</td>
</tr>
<tr>
<td>16</td>
<td>5 Star Marble Industries</td>
<td>Muhammad Arif</td>
<td>Near Kohistan Shell Petrol Pump, Peshawar Road, Sangjani Islamabad</td>
</tr>
<tr>
<td>17</td>
<td>AL Madina Marble and granite</td>
<td>Ibrar Ul Haq (36502-6764164-9)</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>18</td>
<td>Royal Marble</td>
<td>Iltaf Hussain</td>
<td>Tool Plaza Sangjani Islamabad</td>
</tr>
<tr>
<td>19</td>
<td>Aswad Marble</td>
<td>Bilal ALI</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>20</td>
<td>Umer Marble</td>
<td>Bashir Ahmed</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>21</td>
<td>New Sadaat Marble</td>
<td>Syed Tahir Jamil</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>22</td>
<td>Sabri Marble</td>
<td>Muhammad Asim</td>
<td>Near Toll Plaza, G.T Road, Sangjani, Islamabad</td>
</tr>
<tr>
<td>23</td>
<td>Pearl Marble</td>
<td>Fazal Khaliq</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>24</td>
<td>MZA Marble</td>
<td>Parvez</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>25</td>
<td>Hashim Marble</td>
<td>Shams Ud din</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>26</td>
<td>Sethi Marble</td>
<td>Faheem</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>27</td>
<td>Shandoor Marble</td>
<td>javed</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>28</td>
<td>Mehria Marble</td>
<td></td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>RAWALPINDI</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Watan Marbles</td>
<td>Shoaib Hamid</td>
<td>Westridge-III, Rawalpindi.</td>
</tr>
<tr>
<td>3</td>
<td>Mehria Marble.</td>
<td>Malik M. Manzoor Elahi</td>
<td>Near Watan Mill, W-II, RWP.</td>
</tr>
<tr>
<td>4</td>
<td>Ali Zaman Marble</td>
<td>Malik M. Arfeen</td>
<td>Raja Gulab Markete, W-III Rawalpindi</td>
</tr>
<tr>
<td>5</td>
<td>Madina Marble.</td>
<td>Naseeb ul Ghani.</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>6</td>
<td>Hussain Marble.</td>
<td>Shafqat Nadeem Saqib.</td>
<td>Range Road, W-III, Rawalpindi</td>
</tr>
<tr>
<td>7</td>
<td>Siran Marble.</td>
<td>M. Arshad Mehmood</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>8</td>
<td>Kohinoor Marble Factory.</td>
<td>Abdul Wadood</td>
<td>Tarnoli Markete W-III Rawalpindi</td>
</tr>
<tr>
<td>9</td>
<td>Cantt Marble</td>
<td>Shahid Mehmood.</td>
<td>Near Watan Mill, W-II RWP</td>
</tr>
<tr>
<td>10</td>
<td>New Saeed Marble</td>
<td>Saeed ur Rehman</td>
<td>Industrial Area, W-II RWP.</td>
</tr>
<tr>
<td>11</td>
<td>Ajmair Sharif Marble.</td>
<td>Abdul Hafeez.</td>
<td>Industrial Area, W-II RWP.</td>
</tr>
<tr>
<td>12</td>
<td>Bakhtawar Hardware &amp; Marble</td>
<td>Habib Ullah Khan</td>
<td>Shop#3, Mohallah Hafiz Abad, Westreg II, Rawalpindi</td>
</tr>
<tr>
<td>13</td>
<td>Al Noor Marble</td>
<td>Haroon Shah .Khattak</td>
<td>Near EMP Army, W-III RWP.</td>
</tr>
<tr>
<td>14</td>
<td>Westridge Marble.</td>
<td>Shamsheer Ali.</td>
<td>Near Rawal Kanta, W-III RWP.</td>
</tr>
<tr>
<td>15</td>
<td>Marhaba Marble</td>
<td>Haji Mushtaq Hussain</td>
<td>EMP Army, Range Road, W-III RWP</td>
</tr>
<tr>
<td>16</td>
<td>Stone Mart .</td>
<td>M. Ilyas.</td>
<td>Near Punjab Flour Mill. RWP</td>
</tr>
<tr>
<td></td>
<td>Sadaat Marble</td>
<td>Syed Tahir Jamil</td>
<td>MISRIAL ROAD RAWALPINDI</td>
</tr>
<tr>
<td>17</td>
<td>Abdul wahab Khan Marble</td>
<td>Azim Ahmad Khan Lughmani</td>
<td>383/27, Street # 2, Misrial Road Rawalpindi Cantt</td>
</tr>
<tr>
<td>18</td>
<td>Ahsan Marble</td>
<td>Zulfiqar Hussain</td>
<td>Industial Area Range Road W-III Rawalpindi</td>
</tr>
<tr>
<td>19</td>
<td>Mian Khan Marble</td>
<td>Mian Khan</td>
<td>Westridge II RWP</td>
</tr>
<tr>
<td>20</td>
<td>Shan Marble</td>
<td>Arshad Mehmood</td>
<td>Industrial Area W-III RWP</td>
</tr>
<tr>
<td>21</td>
<td>New Ehtasham Marble.</td>
<td>Muhammad Naseer</td>
<td>Near Rawal Kanta Range Road, W- RWP.</td>
</tr>
<tr>
<td>22</td>
<td>Gull Marble</td>
<td>Irfan Khan/Amjad Khan</td>
<td>Industry Area W-II Rawalpindi</td>
</tr>
<tr>
<td>23</td>
<td>Iqbal Marble Factory</td>
<td>Zahid Manzoor</td>
<td>Chand Mari Road W-III Near Rawal Kanta RWP</td>
</tr>
<tr>
<td>24</td>
<td>Prime Marble</td>
<td>Raja Arsshad / Raja Shahid Mumtaz</td>
<td>Range Road Rawalpindi</td>
</tr>
<tr>
<td>25</td>
<td>Ramzan Marble Showroom</td>
<td>Mr. M. Ramzan.</td>
<td>Range Road, Westridge, RWP.</td>
</tr>
<tr>
<td>26</td>
<td>Mehran Marble</td>
<td>M. Ilyas.</td>
<td>Range Road, Westridge, RWP.</td>
</tr>
<tr>
<td></td>
<td>Subhan Marble</td>
<td>Ehsan Rafeeq</td>
<td>Chakmada Khan Westrige II Rawalpindi</td>
</tr>
<tr>
<td>27</td>
<td>Zahoor Marble</td>
<td>Haji Zahoor Ahmad</td>
<td>Near Watan Mill, W-II, RWP.</td>
</tr>
<tr>
<td>28</td>
<td>Awais Chakwal Stone</td>
<td>Arshad Mehmood</td>
<td>Industrial Area W-III RWP</td>
</tr>
<tr>
<td>29</td>
<td>Buneer Marble</td>
<td>Abdul wahab</td>
<td>Range Road Westridge III Rawalpindi</td>
</tr>
<tr>
<td>30</td>
<td>Usman Marble Show Room</td>
<td>Malik Zulfiqar Ali</td>
<td>Range Road Westridge III Rawalpindi</td>
</tr>
<tr>
<td>31</td>
<td>Hassan Marble</td>
<td>Raja Nasir Mehmood</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>32</td>
<td>Zam Zam Marble</td>
<td>M. Farooq Khan</td>
<td>Near Punjab floor mill-Westriage 3, Rawalpindi.</td>
</tr>
<tr>
<td>33</td>
<td>P.K Marble</td>
<td>Saqib</td>
<td>Westridge III Rawalpindi</td>
</tr>
<tr>
<td>34</td>
<td>Mumtaz Marble Point</td>
<td>Waqar Ahmed</td>
<td>Shop # 4-62/A Chak Madad Khan Westridge III RWP</td>
</tr>
<tr>
<td>35</td>
<td>Al Azeem Marble</td>
<td>Ghulam Mustafa.</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>36</td>
<td>Frontier Marble Showroom.</td>
<td>M. Ashraf.</td>
<td>Range Road, Westridge, RWP</td>
</tr>
<tr>
<td>37</td>
<td>Hajvairi Marble.</td>
<td>M. Yaqoob.</td>
<td>Range Road, Westridge, RWP.</td>
</tr>
<tr>
<td>38</td>
<td>Friends Marble.</td>
<td>Riaz Ahmed.</td>
<td>Near Punjab Flour Mill, W-II RWP</td>
</tr>
<tr>
<td>39</td>
<td>Fine Marble.</td>
<td>Faheem Ud din.</td>
<td>Near Punjab Flour Mill,W-II RP.</td>
</tr>
<tr>
<td>40</td>
<td>Marble Point</td>
<td>Hafiz nasir Zahoor</td>
<td>Industrial Area Near Punjab Flour Mill W-II RWP</td>
</tr>
<tr>
<td>41</td>
<td>Khattak Marble.</td>
<td>Sajid Shah.</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>42</td>
<td>Ghantoot Marble</td>
<td>Sajjad Hayat</td>
<td>Industrial Area W-III Rawalpindi</td>
</tr>
<tr>
<td>43</td>
<td>Chinar Marble</td>
<td>Javeed Khan</td>
<td>Industrial Area Chak Madad Khan, Rawalpindi</td>
</tr>
<tr>
<td>44</td>
<td>Ibrahim Marble</td>
<td>Insaaf Khan</td>
<td>Industrial Area W-III Rawalpindi</td>
</tr>
<tr>
<td>45</td>
<td>Javeed Marble</td>
<td>Javeed Khan</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>46</td>
<td>Taqwa Marble</td>
<td>Raja Faisal</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>47</td>
<td>Nice Marble</td>
<td>Asif Mehmood</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>48</td>
<td>Tahir Granite</td>
<td>Tahir Mehmood</td>
<td>Westridge III Rawalpindi</td>
</tr>
<tr>
<td>49</td>
<td>99 Stone Marble</td>
<td>Abid Ali</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>50</td>
<td>Rehman Marble</td>
<td>Shafeeq</td>
<td>Westridge III Rawalpindi</td>
</tr>
<tr>
<td>51</td>
<td>mumtaz Marble Point</td>
<td>Iqbal</td>
<td>Westridge III Rawalpindi</td>
</tr>
<tr>
<td>52</td>
<td>Parlino House</td>
<td>Azhar khurshid</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>53</td>
<td>Shaheer Marble</td>
<td>Raja Adeel</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>54</td>
<td>New Kashmir</td>
<td>Abdul Kareem</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>55</td>
<td>Pak Watan</td>
<td>Nasir Mehmood</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>56</td>
<td>Waqas Marble Factory</td>
<td>WAQAS</td>
<td>Small Industrial Rashakai Mardan</td>
</tr>
<tr>
<td>57</td>
<td>Iqra Marble&amp; Granite</td>
<td></td>
<td>Spin zar plaza I /9 Markaz Islamabad</td>
</tr>
<tr>
<td>58</td>
<td>Aljannat Marble&amp;Granite</td>
<td>Malik Salman</td>
<td>Range road industrial Area westridge</td>
</tr>
<tr>
<td>59</td>
<td>Sadaat Marble</td>
<td>Syed Tahir Jamil</td>
<td>MISRIAL ROAD RAWALPINDI</td>
</tr>
<tr>
<td>60</td>
<td>New Ittehad Marble</td>
<td>Ali Akber</td>
<td>Westridge-III, Rawalpindi.</td>
</tr>
<tr>
<td>65</td>
<td>Zahoor Marble</td>
<td>Haji Zahoor Ahmad</td>
<td>Near Watan Mill, W-II, RWP.</td>
</tr>
<tr>
<td>66</td>
<td>Mehria Marble.</td>
<td>Jahanzaib</td>
<td>Near Watan Mill, W-II, RWP.</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>67</td>
<td>B.M Marble</td>
<td>Haji Mushtaq ahmed</td>
<td>Westridge-III, Rawalpindi.</td>
</tr>
<tr>
<td>68</td>
<td>G.R Marble</td>
<td>Zeeshan</td>
<td>Westridge-III, Rawalpindi.</td>
</tr>
<tr>
<td>69</td>
<td>Haq Baho Marble</td>
<td>Malik Shakeel</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>70</td>
<td>Habib Chakwal Stone</td>
<td>Habib Ur Rehman</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>71</td>
<td>Peak Marble</td>
<td>Usman</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>72</td>
<td>Shoaib Awan Marble</td>
<td>Arshid Awan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>73</td>
<td>New Umer Marble</td>
<td>Riaz Ahmed</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>74</td>
<td>S.B Marble</td>
<td>Aftab</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>75</td>
<td>Ahtisham Marble</td>
<td>Naseer/Sadiq</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>76</td>
<td>Shahzad Marble</td>
<td>Syed Rahim Shah</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>77</td>
<td>Fasil Marble</td>
<td>Khalid</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>78</td>
<td>Adrees Marble</td>
<td>Ahsan Khan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>79</td>
<td>Al Majeed Marble</td>
<td>Wahid Shah Khattak</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>80</td>
<td>King Stone Marble</td>
<td>Iqbal</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>81</td>
<td>Shafi Ullah Marble &amp; Granite</td>
<td>Shafi Ullah</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>82</td>
<td>Yaseen Marble</td>
<td>Mir Hassan Khan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>83</td>
<td>Qadirya Pak Marble</td>
<td>Javeed Akhtar</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>84</td>
<td>Zyarat white Marble</td>
<td>Waqar ullah</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>85</td>
<td>Moosa Marble</td>
<td>Adnan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>86</td>
<td>Arif Granite</td>
<td>Arif Sultan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>87</td>
<td>A ONE Jamal Marble</td>
<td>Malik Tariq Mehmood</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>88</td>
<td>Pak Parleno</td>
<td>Saeed Khan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>89</td>
<td>Tarballa Marble</td>
<td>Malik Yasir</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>90</td>
<td>Abdullah Marble.</td>
<td>Abdul Rehman</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>91</td>
<td>Stone house</td>
<td>Shahzad Rafiq</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>92</td>
<td>PAMIR Marble &amp; Granite</td>
<td>Aziz Khan</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>93</td>
<td>Floor Master</td>
<td>Mehboob jahangire</td>
<td>Industerial Ar5ea Chak madad Khan</td>
</tr>
<tr>
<td>94</td>
<td>Al Nazir Marble</td>
<td>Malik Nazir</td>
<td>Industerial Ar5ea Chak madad Khan</td>
</tr>
<tr>
<td>95</td>
<td>Mandi Bahawaldin Marble</td>
<td>Nazir</td>
<td>Industerial Ar5ea Chak madad Khan</td>
</tr>
<tr>
<td>96</td>
<td>Noor Marble</td>
<td>Noor ul Hassan</td>
<td>Industerial Ar5ea Chak madad Khan</td>
</tr>
<tr>
<td>97</td>
<td>Sadiq Marble</td>
<td>Sadiq</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>98</td>
<td>Fazal Marble</td>
<td>Ghulam Hassan</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>99</td>
<td>New Frontier Marble</td>
<td>Iltaf Khan</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>100</td>
<td>Abdul Razaq Marble</td>
<td>Iqbal</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>101</td>
<td>Sahud Marble</td>
<td>Syed ur Rehman</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>102</td>
<td>Umar Granite Marble</td>
<td>Jamshid</td>
<td>Westridge IIIRawalpindi</td>
</tr>
<tr>
<td>104</td>
<td>Ghulam Mustafa Gohar Marble</td>
<td>Zahoor Ahmed</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>105</td>
<td>Haji Ali Marble</td>
<td>Khushal</td>
<td>Westridge IIIRawalpindi</td>
</tr>
<tr>
<td>106</td>
<td>Satti Marble</td>
<td>Safir Satti</td>
<td>Westridge IIIRawalpindi</td>
</tr>
<tr>
<td>107</td>
<td>Mosa Marble</td>
<td>Ansar Khan</td>
<td>Westridge IIIRawalpindi</td>
</tr>
<tr>
<td>108</td>
<td>Abdullah Marble.</td>
<td>Abdul kream</td>
<td>Westridge IIRawalpindi</td>
</tr>
<tr>
<td>109</td>
<td>Waheed Marble Factory</td>
<td>Abdul Waheed</td>
<td>Main Idyala road near Shah pur stop Rawalpindi</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>110</td>
<td>Laiq Marble</td>
<td>Muhammad Nawaz</td>
<td>IJP Road, Rawalpindi</td>
</tr>
<tr>
<td>111</td>
<td>IQRA Marble</td>
<td>Muhammad Gul Khattak</td>
<td>Railway Road, Westrigde II, Rawalpindi</td>
</tr>
<tr>
<td>112</td>
<td>Ghausia Marble</td>
<td>Amir Shahzad</td>
<td>Railway Road, Westrigde II, Rawalpindi</td>
</tr>
<tr>
<td>113</td>
<td>Al Madina Marble</td>
<td></td>
<td>Railway Road, Westrigde II, Rawalpindi</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>GUJJAR KHAN</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>1</th>
<th>Awais Granite Marble Factory</th>
<th>Mian Muhammad Akram (34101-2683682-9)</th>
<th>Bilmuqabil Cricket Stadium, G.T Road Gujjar Khan</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>KARACHI</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th></th>
<th>Name of Company</th>
<th>Name of Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Cinopak Resourses (Pvt.) Limited</td>
<td>Nadeem Khan Shehanshahi (42501-6125169-1)</td>
<td>D-27/1, Block-5, Kehkashan, Clifton, Karachi</td>
</tr>
<tr>
<td>2</td>
<td>R.Z.Marble Industries</td>
<td>Niyaz-Ul-Amin</td>
<td>Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>3</td>
<td>Memon Marble</td>
<td>M. Khurram Ibrahim</td>
<td>109- BL-2 Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>4</td>
<td>Mujahid Marble</td>
<td>Mr.syed Mujahid Nabi</td>
<td>D-37-&amp; 13 Manghopir Road KHI.</td>
</tr>
<tr>
<td>5</td>
<td>F.G.Marble</td>
<td>Farman Ali &amp; Noor Hassan</td>
<td>NC 1, Nusrat Bhutto Colony,Karachi.</td>
</tr>
<tr>
<td>6</td>
<td>SHAH MARBLE</td>
<td>Ameen Memon</td>
<td>R-20 4th Floor trood,karachi.</td>
</tr>
<tr>
<td>7</td>
<td>Ali’s Marble</td>
<td>Mr.Syed zeeshan Ali</td>
<td>16 St-6-Bl-1 Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>8</td>
<td>Kashmir Enterprises</td>
<td>Sharif Kashmiri Mobasil</td>
<td>Plot No 53, Metroville manghopir Road Karachi.</td>
</tr>
<tr>
<td>9</td>
<td>Noor Marble.</td>
<td>Shamim Bhai</td>
<td>N C 1, Deh Manghopir Road, Karachi.</td>
</tr>
<tr>
<td>10</td>
<td>Marble Craft International</td>
<td>Adnan Masoom</td>
<td>Plot Nc 31 Deh Metroville manghopir Road Karachi.</td>
</tr>
<tr>
<td>11</td>
<td>Ghazi Marble</td>
<td>Umar &amp; Shahzad</td>
<td>Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>12</td>
<td>Supreme Marble</td>
<td>Mr.Muhmmad Aqeel</td>
<td>NC 31, Nusrat Bhutto Colony, Pump M P Road,Karachi.</td>
</tr>
<tr>
<td>13</td>
<td>Faizan Marble</td>
<td>Adnan Rafiq Ahmed</td>
<td>Qasba 5/5 Metroville Manghopir Road Khi.</td>
</tr>
<tr>
<td>14</td>
<td>Al Mustafa Marble</td>
<td>Mr.Nawab Uddin</td>
<td>1-D-1 Sec-5 Qasba Metroville Manghopir Road Khi</td>
</tr>
<tr>
<td>15</td>
<td>Saudagar Marble Industry</td>
<td>Mr.Muhammad Iqbal</td>
<td>Nc-1 Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>16</td>
<td>Marble Centre</td>
<td>Mr. sohail</td>
<td>3 Manghopir Road Karachi PECH Karachi.</td>
</tr>
<tr>
<td>17</td>
<td>Macca Madina Marble Industry</td>
<td>Zahid Akram</td>
<td>24/3 Block 2, Qazba Metroville, Manghopir Road,Karachi</td>
</tr>
<tr>
<td>18</td>
<td>Tak International</td>
<td>Mr.Abdul Mateen</td>
<td>R-210 Ctr I.i chundrigar Rd Khi</td>
</tr>
<tr>
<td>19</td>
<td>A.b. Marble Ind</td>
<td>Inyat Ali &amp; Bilal</td>
<td>NC 1 Deh Mangho Pir Road</td>
</tr>
<tr>
<td>20</td>
<td>Tanveer Marble</td>
<td>Tanveer</td>
<td>Plot 66 st 6/6 Manghopir Road Khi</td>
</tr>
<tr>
<td>21</td>
<td>Five star Marble</td>
<td>Mr.Mehtab Alam Bhatti</td>
<td>1-C-6 Sec 5/5 Qasba Metroville Manghopir Road Khi</td>
</tr>
<tr>
<td>22</td>
<td>Modern Marble</td>
<td>MR.Arshad</td>
<td>1-D 24 Qasba Meroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>23</td>
<td>M.F.Marble</td>
<td>Afzal</td>
<td>Amin Abad Ind Manghopir Road, Karachi.</td>
</tr>
<tr>
<td>24</td>
<td>New Hamza Marble</td>
<td>Kashif</td>
<td>1-D, Qasba Metroville Manghopir Road Khi</td>
</tr>
<tr>
<td>25</td>
<td>Saeed Khan Amazai Marble</td>
<td>Saeed Khan</td>
<td>NC-1, Qasba Manghopir Road, Karachi.</td>
</tr>
<tr>
<td>26</td>
<td>Kashmir Marble</td>
<td>Pervaiz Iqbal</td>
<td>St 150-151-154 Deh Manghopir Road, Karachi</td>
</tr>
<tr>
<td>27</td>
<td>Kingdom Internat-national</td>
<td>MR.M. Farhan Afzal</td>
<td>Nc 26 Deh Manghopir Nusrat Bhutto Cly Khi</td>
</tr>
<tr>
<td>28</td>
<td>Malti Marble</td>
<td>Raiz</td>
<td>NC 31, Nusrat Bhutto Colony, Karachi.</td>
</tr>
<tr>
<td>29</td>
<td>Yousuf Marble</td>
<td>Mr Yousuf</td>
<td>Plot 112 New Mianwali Cly Sec 1-c MP RD Khi</td>
</tr>
<tr>
<td>30</td>
<td>Right Marble</td>
<td>Mr. M. Arif Ansari</td>
<td>Nc-1 Qasba Metroville Manghopir rd Khi</td>
</tr>
<tr>
<td>31</td>
<td>Dilawar Marble</td>
<td>Dilawar</td>
<td>Pak Colony Manghopir Road</td>
</tr>
<tr>
<td>32</td>
<td>Nabeel Marble</td>
<td>Mr.Muhammad Younis</td>
<td>NC-31/B Nusrat Bhutto Colony, M.P Road,Karachi</td>
</tr>
<tr>
<td>33</td>
<td>Ghani Marble</td>
<td>Asghar &amp; Rasheed Khan</td>
<td>Ct-3 Qasba Metroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>34</td>
<td>Union Marble</td>
<td>Mudasir Ali</td>
<td>5 Mian Wali Colony Qasba Metrovill M.P Road Karachi</td>
</tr>
<tr>
<td>35</td>
<td>Khwaja Mable</td>
<td>Khwaja Abdul Aziz Ghouri</td>
<td>D-1-38 Bl-7 Gulshan -e- Iqbal KHI</td>
</tr>
<tr>
<td>36</td>
<td>Paramount Marble</td>
<td>Niyaz &amp; Yousuf</td>
<td>1 C Qasba 5/5 Manghopire Road, Karachi.</td>
</tr>
<tr>
<td>37</td>
<td>Empire Art</td>
<td>Sarwar</td>
<td>St-6-Bl-1,Qasba Metroville Manghopir Road Karachi.</td>
</tr>
<tr>
<td>38</td>
<td>Sayyada Marble</td>
<td>Faisal Wasi Ansari</td>
<td>A 49-50, Hasrat Mohani Colony Manghopir Road Near Noorani Masjid Road KHI</td>
</tr>
<tr>
<td>39</td>
<td>Circle One</td>
<td>Syed Qadir&amp;Qadeer</td>
<td>Mezzanine floor ,4- c, Lane-10 bukhari commercial phase-4 DHA, Karachi</td>
</tr>
<tr>
<td>40</td>
<td>Osaf Marble Ind</td>
<td>Fayyaz Ahmed Shoaib</td>
<td>NC 1 Deh Manghopir Road Karachi</td>
</tr>
<tr>
<td>41</td>
<td>Pir Lal Shah Marble</td>
<td>Haji Jamil Khan Afridi</td>
<td>Ameenabad industry Manghopir Road Karachi</td>
</tr>
<tr>
<td>42</td>
<td>Marble &amp; Marble</td>
<td>Sadiq Khan</td>
<td></td>
</tr>
<tr>
<td>43</td>
<td>Gulab Marble</td>
<td>Gulab Khan</td>
<td>D- Ameena bad Manghopir Rd Khi</td>
</tr>
<tr>
<td>44</td>
<td>Design Corner</td>
<td>Haroon</td>
<td>Plot Nc 7 Qasba Metrovill</td>
</tr>
<tr>
<td>45</td>
<td>Tayyab Marble</td>
<td>S Tayyab Ahmed</td>
<td>D-37-&amp; 13 Manghopir Road Metroville M.P Rd Khi</td>
</tr>
<tr>
<td>46</td>
<td>A K Marble</td>
<td>Mr.Syed Asif Hussain</td>
<td>1-9/1 Shop-1 Opp Shell Petrol Pump M P Rd Khi</td>
</tr>
<tr>
<td>47</td>
<td>Bobby Eximp</td>
<td>Babur Habib</td>
<td>p-9modern colony Manghopir Road Metroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>48</td>
<td>Marble and Marble</td>
<td>Sadiq Khan</td>
<td>Nc-1 Qasba Metroville Manghopir rd Khi</td>
</tr>
<tr>
<td>49</td>
<td>Zakariya Marble</td>
<td>Ashfaq</td>
<td>NC 31 Nusrat Bhutto Colony Pump, metroville Manghopir Road khi</td>
</tr>
<tr>
<td>50</td>
<td>Prime Marble Products</td>
<td>Mr.GHULAM Qadir</td>
<td>1-C-12 sec-5/5 Qasba metroville Manghopir Road khi</td>
</tr>
<tr>
<td>51</td>
<td>Kainat Enterprises</td>
<td>Nishad Muhammad</td>
<td>House no.111 sec 01 Pakhtunabad Karachi</td>
</tr>
<tr>
<td>52</td>
<td>Khan Marble</td>
<td>Qayyum Khatak</td>
<td>Manghopir road opposite Police station Karachi</td>
</tr>
<tr>
<td>53</td>
<td>City Marble</td>
<td>DalI ur Rehman</td>
<td>Manghopir road new miyawali site Karachi</td>
</tr>
<tr>
<td>54</td>
<td>Qaisar Marble</td>
<td>Qaisar Khan</td>
<td>Deh manghopir road Karachi</td>
</tr>
<tr>
<td>55</td>
<td>Insaf Marble</td>
<td>Wahab Gul</td>
<td>men manghopir road</td>
</tr>
<tr>
<td>56</td>
<td>Wali Safi</td>
<td>Abdul Muhammad/Said ur Rehman</td>
<td>Deh manghopir road Karachi</td>
</tr>
<tr>
<td>57</td>
<td>Al Falah Marble</td>
<td>Durrani Khan</td>
<td>nc 1 Deh manghopir road Karachi</td>
</tr>
<tr>
<td>58</td>
<td>Desent Marble</td>
<td>M.Rehman/Ashiq</td>
<td>Deh manghopir road Karachi</td>
</tr>
<tr>
<td>59</td>
<td>Swat Marble</td>
<td>Ummat Shah</td>
<td>plot no 1-c/80 st,5/5 Manghopir road Karachi</td>
</tr>
<tr>
<td>60</td>
<td>Sony Dharti Marble</td>
<td>Taibzar</td>
<td>plot no 1-c, st,5/5 Manghopir road Karachi</td>
</tr>
<tr>
<td>NEW MEMBERS</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Rahim Marble</td>
<td>Najmul Hasan</td>
<td>2 &amp; 3, St 6/1 Manghopir road Karachi</td>
</tr>
<tr>
<td>2</td>
<td>Faiza-e-Madina Marble</td>
<td>Mohhammed Tayyab</td>
<td>Qasba Metrovill M.P Road KARACHI</td>
</tr>
<tr>
<td>3</td>
<td>Pakistan Marble</td>
<td>Mohammed Akram</td>
<td>plot 1, st 1 Sector I sultanabad</td>
</tr>
<tr>
<td>4</td>
<td>Karachi Marble</td>
<td>Alam Khan</td>
<td>Nc 31/3 Manghopir road Karachi</td>
</tr>
<tr>
<td>5</td>
<td>Usman Marble</td>
<td>Mohammed Anwar</td>
<td>Survay 151, 152, 154 Manghopir road Karachi</td>
</tr>
<tr>
<td>6</td>
<td>Iqbal &amp; Sons Marble</td>
<td>Mohammed Iqbal</td>
<td>Plot 1c 80, section 5/g Manghopir road Karachi</td>
</tr>
<tr>
<td>7</td>
<td>Kushal Marble</td>
<td>Mohammed Ayub</td>
<td>NC 31 Nusrat Bhutto Colony Manghopir Rd KARACHI</td>
</tr>
<tr>
<td>8</td>
<td>Irfan Polish</td>
<td>Mohammed Irfan</td>
<td>Kesc 115 Manghopir road Karachi</td>
</tr>
<tr>
<td>9</td>
<td>Fameeda Marble</td>
<td>Aftab Ahmed</td>
<td>1-D-7/8 Manghopir road Karachi</td>
</tr>
<tr>
<td>10</td>
<td>Zenith Marble Industry</td>
<td>Shakil Ahmed</td>
<td>Plot 1d 05, Block B Manghopir road Karachi</td>
</tr>
<tr>
<td>11</td>
<td>Usman Marble</td>
<td>Saeed Ullah</td>
<td>Plot C 1 A/62 st 6/1, Manghopir road Karachi</td>
</tr>
<tr>
<td>12</td>
<td>Itfaiq Marble</td>
<td>Muhammad Tameem</td>
<td>NC 31 Manghopir road Karachi</td>
</tr>
<tr>
<td>13</td>
<td>Buner Marble (Sent Before)</td>
<td>Taj Ameen Khan</td>
<td>Plot 08 B, NC 01 Manghopir road Karachi</td>
</tr>
<tr>
<td>14</td>
<td>Tariq Aziz Marble</td>
<td>Bakht Afsar</td>
<td>NC 31 Manghopir road Karachi</td>
</tr>
<tr>
<td>15</td>
<td>Jablae Noor Marble</td>
<td>Ayaz Khan</td>
<td>NC 31 Manghopir road Karachi</td>
</tr>
<tr>
<td>16</td>
<td>Al Noor Marble</td>
<td>Wahid Khan</td>
<td>Kesc 95 plot 06, Islamaia Colony</td>
</tr>
<tr>
<td>17</td>
<td>S.M Marble</td>
<td>Musharaf Khan</td>
<td>1d 3st 1 G Block A Manghopir road Karachi</td>
</tr>
<tr>
<td>18</td>
<td>Swat Marble</td>
<td>Zard Ullah</td>
<td>Mangopir Road Karachi</td>
</tr>
<tr>
<td>19</td>
<td>Hashmi Marble</td>
<td>Nawab Khan</td>
<td>Plot C1, A 32 Manghopir road Karachi</td>
</tr>
<tr>
<td>20</td>
<td>Ameen Marble Industries</td>
<td>Bakht Ameen</td>
<td>Plot 07 Deh Orangi M.P Road Karachi</td>
</tr>
<tr>
<td>21</td>
<td>Marble International 2</td>
<td>Noor Ul Islam</td>
<td>plot 1 d st 14 sector 5 Manghopir road Karachi</td>
</tr>
<tr>
<td>22</td>
<td>Shahzad Marblr Industries</td>
<td>Qaid Khan / Sami Ullah</td>
<td>st 6 block 1 Manghopir road Karachi</td>
</tr>
<tr>
<td>23</td>
<td>M.M Marble</td>
<td>Behra Mand</td>
<td>plot 109 st 189 Manghopir road Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Geo Marble</td>
<td>Jamil Akhtar</td>
<td>Plot NC 31 Manghopir road Karachi</td>
</tr>
<tr>
<td>25</td>
<td>Qadri Marble</td>
<td>jamil Akhtar</td>
<td>NC 1A NC 31 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>26</td>
<td>Gul Marble</td>
<td>Muhammad Daud</td>
<td>Noc to A/1 Manghopir road Karachi</td>
</tr>
<tr>
<td>27</td>
<td>Three Star Marble</td>
<td>Gul Marjan</td>
<td>Plot C-2151-5-5 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>28</td>
<td>Hashmi Marble</td>
<td>Muhammad Sharif</td>
<td>Plot 1C Sector 5/5 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>29</td>
<td>New Three Star Marble</td>
<td>Farooq Khan</td>
<td>Plot A 4 NC 01, Metrovill, Manghopir road Karachi</td>
</tr>
<tr>
<td>30</td>
<td>Master Marble Industry</td>
<td>Tariq Yaseen</td>
<td>Plot A 9 Block 05 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>31</td>
<td>Al Syeed Marble</td>
<td>Saha Zada Noor Ul Islam</td>
<td>Plot NK 31 m26 Manghopir road Karachi</td>
</tr>
<tr>
<td>32</td>
<td>Al Hamd Marble</td>
<td>Muhammad Darwash Khan</td>
<td>Plot C89 Block 5 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>33</td>
<td>Rehan Marble</td>
<td>Akhtar Janan</td>
<td>Plot 177 Qasba Metrovill Aurangi</td>
</tr>
<tr>
<td>34</td>
<td>Mohsin Marble</td>
<td>Saeed Marjan</td>
<td>Plot 26 Manghopir road Karachi</td>
</tr>
<tr>
<td>35</td>
<td>Sahabzada Marble</td>
<td>Shamsul Islam</td>
<td>Plot 2 NC 1 Manghopir road Karachi 21-c</td>
</tr>
<tr>
<td>36</td>
<td>Umair Marble</td>
<td>Muhammad Umair</td>
<td>Plot 8 Qasba Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>37</td>
<td>Zarwali Marble</td>
<td>Ilyas Khan</td>
<td>Plot 31/3A Manghopir road Karachi</td>
</tr>
<tr>
<td>38</td>
<td>N.S Marble</td>
<td>Inam Uddin</td>
<td>Plot D-43 Survay 30 ameenabad</td>
</tr>
<tr>
<td>39</td>
<td>Buland Khan Marble</td>
<td>Haji Buland Khan</td>
<td>D-37 Ameenabad Qasba Metrovill</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th>RAWAT</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S #</th>
<th>Name of Company</th>
<th>Name of Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Zeeshan Marble &amp; Granite Factory</td>
<td>Mukaram Shah</td>
<td>T Chowk Main G T Road Rawat Islamabad</td>
</tr>
<tr>
<td>2</td>
<td>Shan Marble &amp; Granite</td>
<td>Asif Mehmood</td>
<td>Dhoke Awan Opp DHA II, Gate 1 Main G.T Road Rawat Islamabad</td>
</tr>
<tr>
<td>3</td>
<td>Botiseena House</td>
<td>Muhammad Ijaz</td>
<td>T Chowk Main G T Road Rawat Islamabad</td>
</tr>
<tr>
<td>4</td>
<td>Royal Marble</td>
<td>Saleem Iqbal</td>
<td>Haji Wali Plaza Opp DHA Phase II Main G.T Road Rawat</td>
</tr>
<tr>
<td>5</td>
<td>Insaf Marble</td>
<td>Riaz Ali / Muhammad Arif</td>
<td>T Chowk Rawat Islamabad</td>
</tr>
<tr>
<td>6</td>
<td>New Bunair Marble Show Room</td>
<td>Syed Zahoor Bacha</td>
<td>Main G.T.Road, Rawat, T-Chowk, Islamabad</td>
</tr>
<tr>
<td>7</td>
<td>Al Karam Marble</td>
<td>Naveed Altaf</td>
<td>T Chowk Main G T Road Rawat Islamabad</td>
</tr>
<tr>
<td>8</td>
<td>Baba Marble &amp; Granite</td>
<td>Saqib Mehmood</td>
<td>Opp,DHA Gate # 1, Phase II, G.T Road Rawat</td>
</tr>
<tr>
<td>9</td>
<td>Shahid Khan Afridi Marble</td>
<td>Zohaib Khan</td>
<td>T Chowk Main G T Road Rawat Islamabad</td>
</tr>
<tr>
<td>10</td>
<td>Ayesha Marble &amp; Granite</td>
<td>Nasir Mehmood Kiyani</td>
<td>Opp DHA Phase II Gate # 1, Main G.T.Road, Islamabad</td>
</tr>
<tr>
<td>12</td>
<td>Choudhary Marble &amp; Granite</td>
<td>Choudhary Babar Rasheed</td>
<td>Opp Tool Plaza Near T Chowk Rawat</td>
</tr>
<tr>
<td>13</td>
<td>Manzar Marble</td>
<td>Malik Manzar Ayyaz</td>
<td>T Chowk Main G. T Road Rawat Islamabad</td>
</tr>
<tr>
<td>14</td>
<td>Hamalia Marbles</td>
<td>Fazal e Rabi</td>
<td>Main G T Road, Near T- Chowk Rawat Islamabad</td>
</tr>
<tr>
<td>15</td>
<td>Fine Stone Marble &amp; Granite</td>
<td>Abid Ur Rehman</td>
<td>Opp DHA II Gate # 1 Dhoki Awan Stop Rawat Islamabad</td>
</tr>
<tr>
<td>16</td>
<td>Mehria Marble Factory</td>
<td>Mehboob Khan</td>
<td>Near DHA, Phase-2,opp chaudry plaza Main G-T Road Rawalpindi.</td>
</tr>
<tr>
<td>17</td>
<td>Nabeel Marble</td>
<td>Rizwan Ali</td>
<td>DHA Office opp.D.H.A Gate#1 phase 2 G.T Road,Rawat.</td>
</tr>
<tr>
<td>18</td>
<td>Gul Marble</td>
<td>Faisal Hassan</td>
<td>T Chowk Main G. T Road Rawat Islamabad</td>
</tr>
<tr>
<td>19</td>
<td>Bismillah Marble</td>
<td>Choudary basharat</td>
<td>Bilmuqabal shell petrol pump bhangral road Rawat</td>
</tr>
<tr>
<td>20</td>
<td>Stone Craft</td>
<td>Muhammad Nouman Aziz</td>
<td>Bhatti market Opp.yusra medical College DHA 2 G.T Road Islamabad.</td>
</tr>
<tr>
<td>21</td>
<td>Bakhtawar Marble Hardware</td>
<td>Kaleem Ullah</td>
<td>Shop # 5, Near T. Chowk Dhamial Markete Opp Alied bank Rawat Isb</td>
</tr>
<tr>
<td>24</td>
<td>Pak Paris Marble</td>
<td>Arshad Mehmood</td>
<td>Main G.T.Road, Rawat, Islamabad</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>TAXILA</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Huzaifa Marble &amp; Granite</td>
<td>Umair Sajjad</td>
<td>Plot#26-A Small Industrial Estate(wahcantt)TAXILA</td>
</tr>
<tr>
<td>2</td>
<td>Top Stone Granite Processing</td>
<td>Muhammad Zafar Hayat</td>
<td>Plot#B-55 Punjab small Industries,Taxilla Wah Cantt</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>BALOCHISTAN</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Yasir Marble Processing &amp; Mining 56302-8107730-3</td>
<td>Sardar Yasir Jogezai</td>
<td>Jogezai Plaza, Tehsil Road, Loralai Balochistan Quetta</td>
</tr>
<tr>
<td>2</td>
<td>T J Marble 56302-0831673-1</td>
<td>S.S Hayat Khan Jogezai</td>
<td>Loralai Blochistan</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th>KHARIAN</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Makka Marble Factory</td>
<td>Usman Afzal</td>
<td>Samarala Post Office, Samarala, Tehsil Kharian, Gujrat</td>
</tr>
<tr>
<td>2</td>
<td>Yaqoob Marble Factory</td>
<td>Yaqoob Ahmeed</td>
<td>Chock Rasheedabad khanewal road Multan</td>
</tr>
<tr>
<td>3</td>
<td>Super Marble</td>
<td>Manzoor Ahmed</td>
<td>Beowali Jalalpur jattan road Gujrat</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>JHELUM</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>1</th>
<th>Qazi Marble</th>
<th>Qazi Habib ur Rehman</th>
<th>Small Industrial Estate, Rathian, Jhelum</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>FAISALABAD</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S #</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Super Kohsar Marble</td>
<td>Imran Ahmad</td>
<td>Sheikupura Road Hajiabad Faisalabad</td>
</tr>
<tr>
<td>2</td>
<td>Lyallpur Marble</td>
<td>Ali Asghar sb</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>3</td>
<td>Subhan Marble</td>
<td>Yasir sb</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>4</td>
<td>FAIZAN-E-MADINA MARBLES</td>
<td>M. faizan sb</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>5</td>
<td>SAFI MARBLE</td>
<td>Ali Akbar</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>6</td>
<td>AL-HAMMAD MARBLE</td>
<td>Faisal Saleem</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>7</td>
<td>NEW MIAN MARBLES</td>
<td>Faisal Zaman</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>8</td>
<td>HARIS MARBLE</td>
<td>Arshed sb</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>9</td>
<td>MUSLIM MARBLES</td>
<td>Muneer ahmad</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>10</td>
<td>MASHA ALLAH MARBLE</td>
<td>Zahid Sb</td>
<td>Nader Town, Faisalabad</td>
</tr>
<tr>
<td>11</td>
<td>MUBARAK MARBLE FACTORY</td>
<td>Sarfaraz Mubarak</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>12</td>
<td>Super Mian Mables</td>
<td>Habib Ullah</td>
<td>Khurrianwala,Faisalabad</td>
</tr>
<tr>
<td>13</td>
<td>Nabeel Marble</td>
<td>Khalida Begum</td>
<td>Santsingh Road</td>
</tr>
<tr>
<td>14</td>
<td>Marhaba Marble &amp; Granite Tiles</td>
<td>Perveen Akhtar</td>
<td>Sheikhupura Road, Nishatabad, Faisalabad</td>
</tr>
<tr>
<td>15</td>
<td>Mian Marble</td>
<td>M. Ramzan</td>
<td>Susan Road</td>
</tr>
<tr>
<td>16</td>
<td>Kohistan Marble</td>
<td>Razaq sb</td>
<td>Bakar Mandi Road</td>
</tr>
<tr>
<td>17</td>
<td>Pak Marble</td>
<td>Mirza Saeed sb.</td>
<td>Ghatt Wala</td>
</tr>
<tr>
<td>18</td>
<td>Tawakal Marbles</td>
<td>Obaid Ullah</td>
<td>4 chak Road</td>
</tr>
<tr>
<td>19</td>
<td>Qamar Ishaq Marble</td>
<td>Ishaq sb</td>
<td>Jaranwala Road</td>
</tr>
<tr>
<td>20</td>
<td>Green Granite Marble</td>
<td>Tahir Muneer sb.</td>
<td>Susan Road</td>
</tr>
<tr>
<td>21</td>
<td>Faizan Marble Factory</td>
<td>Khurram Mushtaq</td>
<td>Santsingh Road</td>
</tr>
<tr>
<td>22</td>
<td>National Marble</td>
<td>SADDIQUE ASLAM</td>
<td>Susan Road</td>
</tr>
<tr>
<td>23</td>
<td>New Mian Marble &amp; Granite</td>
<td>M. Haneef Ullah</td>
<td>Satyana Road.</td>
</tr>
<tr>
<td>24</td>
<td>City Marbles</td>
<td>M. Yasin Naseem</td>
<td>204 Chk</td>
</tr>
<tr>
<td>25</td>
<td>Shaukat Marble</td>
<td>Sarfaraz Ali</td>
<td></td>
</tr>
<tr>
<td>26</td>
<td>Afzal Marble</td>
<td>Muhammad Awais</td>
<td>Sheikhupura Road, Faisalabad</td>
</tr>
</tbody>
</table>
<p><strong>SARGODHA</strong></p>
<table>
<thead>
<tr>
<th>S #</th>
<th>Name of Company</th>
<th>Name of Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Awan Marble</td>
<td>Azmat Ali Khan (38403-2175751-5)</td>
<td>General Bus Stand Road Sargodha</td>
</tr>
<tr>
<td>2</td>
<td>Liaqat Marble</td>
<td>Malik Liaqat (38403-2247373-1)</td>
<td>General Bus Stand Road Sargodha</td>
</tr>
<tr>
<td>3</td>
<td>Malik Marbles</td>
<td>Muhmammad Sher (38403-2086202-1)</td>
<td>General Bus Stand Road Sargodha</td>
</tr>
<tr>
<td><strong>GUJRANWALA</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>New Nadeem Marble</td>
<td>Gulzar Ahmed</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>2</td>
<td>Iqbal Marble</td>
<td>M.Khalid Rasheed</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>3</td>
<td>Jaddah Marble</td>
<td>Muhammad Ibrahim</td>
<td>New Bilal Bajwa Road,Gujranwala.</td>
</tr>
<tr>
<td>4</td>
<td>Taham Marble</td>
<td>Faisal Ismail Malik</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>5</td>
<td>Chaudhry Marble</td>
<td>Muhammad Shifa</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>6</td>
<td>Munawar Enterprises</td>
<td>M. Shoaib Munawar</td>
<td>Bajwa Road, Gujranwala</td>
</tr>
<tr>
<td>7</td>
<td>Ismail Marble</td>
<td>Tanveer Ahmed</td>
<td>Khiyali By Pass, Gujranwala.</td>
</tr>
<tr>
<td>8</td>
<td>Al Haram Marble</td>
<td>Masood Anwar</td>
<td>Khiyali By Pass, Gujranwala.</td>
</tr>
<tr>
<td>9</td>
<td>NAGINA MARBLE</td>
<td>M.USMAN TARIQ</td>
<td>Bajwa Road, Gujranwala</td>
</tr>
<tr>
<td>10</td>
<td>NAFEES MARBLE</td>
<td>MUHAMMAD NAFEES</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>11</td>
<td>PAKISTAN MARBLE</td>
<td>MUHAMMAD RIAZ</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>12</td>
<td>Al Khair Marble Industry</td>
<td>Abdul Qadir Kambooh</td>
<td>Mandiala Road Gujranwala</td>
</tr>
<tr>
<td>13</td>
<td>Makkah Marble</td>
<td>Shafqat Iqbal</td>
<td>33-A, S.I.E-2, Gujranwala .</td>
</tr>
<tr>
<td>14</td>
<td>Sadiq Marble</td>
<td>SAJAD HUSSAIN TARRAR</td>
<td>39-42 A, S.I.E-2, Gujranwala .</td>
</tr>
<tr>
<td>15</td>
<td>R.S Traders</td>
<td>Rehan Ahmed</td>
<td>Gondla Wala Road, Gujranwala .</td>
</tr>
<tr>
<td>16</td>
<td>ALVI &amp; BROTHERS</td>
<td>GHULAM QASIM ALVI</td>
<td>JINAH ROAD, GUJRANWALA.</td>
</tr>
<tr>
<td>17</td>
<td>AFZAL MARBLE</td>
<td>M. NAWAZ MUGHAL</td>
<td>House # 260, Jalil Town, Gujranwala</td>
</tr>
<tr>
<td>19</td>
<td>RAB TawakaL MARBLE</td>
<td>MUHAMMAD YOUNAS</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>20</td>
<td>PRIME MARBLE</td>
<td>MALIK IRFAN AHMED</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>21</td>
<td>KHALID MARBLE INDUSTRY</td>
<td>Khalid Javeed</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>22</td>
<td>MASHALLAH MARBLE</td>
<td>AHMED RAZA Sheikh</td>
<td>UPPER KINAL, NAZD KANGNI WALA, GUJRANWALA.</td>
</tr>
<tr>
<td>24</td>
<td>AL-SYEDDAIN MARBLE</td>
<td>SYED MUHAMMAD TAHIR</td>
<td>GUJRANWALA CANT, OPP. DC COLONY, GUJRANWALA.</td>
</tr>
<tr>
<td>25</td>
<td>NATURAL MARBLE INDUSTRY</td>
<td>ZEESHAN AZAM</td>
<td>SHEIKHUPURA ROAD, GUJRANWALA.</td>
</tr>
<tr>
<td>26</td>
<td>NOMAN MARBLE</td>
<td>FOZIA ASGHAR / M ASGHER</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>27</td>
<td>JAPAN MARBLE</td>
<td>MUHAMMAD SALEEM</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>28</td>
<td>Master Marble</td>
<td>M.Yasin</td>
<td>Khiali Bypass Estate 2 Gujranwala</td>
</tr>
<tr>
<td>29</td>
<td>New Bilal Marble Industry</td>
<td>Salman Anwar</td>
<td>New Bilal Bajwa G.T Road</td>
</tr>
<tr>
<td>30</td>
<td>Huzaifa Marble</td>
<td>M. Ikram</td>
<td>Khiali Bypass Estate 2 Gujranwala</td>
</tr>
<tr>
<td>31</td>
<td>Unique Marble Industry.</td>
<td>M. Abdullah</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>32</td>
<td>New Star Marble &amp; Granite</td>
<td>Omair Amin Rana</td>
<td>Bajwa Road, Gujranwala</td>
</tr>
<tr>
<td>32</td>
<td>Ideal Marble</td>
<td>Ali Raza</td>
<td>SIALKOT ROAD, WAZIRABAD, GUJRANWALA..</td>
</tr>
<tr>
<td>33</td>
<td>Shalimar Marble Industry</td>
<td>Muhammad Anwar</td>
<td>Chan-da-Qila, Near Kothi Babu Javed, Gujranwala</td>
</tr>
<tr>
<td>34</td>
<td>Punjab Marble Industry</td>
<td>ZEENAT AMIN</td>
<td>GAP Chowk, Gujranwala</td>
</tr>
<tr>
<td>35</td>
<td>Falak Marble</td>
<td>Qaiser Nawaz</td>
<td>House # 260-A. Jalil Town, Gujranwala</td>
</tr>
<tr>
<td>36</td>
<td>Shalimar Granite</td>
<td>Bushra Begam</td>
<td>Chan-da-Qila, Judicial Colony, Gujranwala</td>
</tr>
<tr>
<td>37</td>
<td>Al-Noor Marble Industry</td>
<td>SAEED ARIF</td>
<td>Bajwa Road, Gujranwala</td>
</tr>
<tr>
<td>38</td>
<td>SHAKEEL MARBLE</td>
<td>SHAKEEL ISMAEEL</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
</tbody>
</table>
<p><strong>LAHORE</strong></p>
<table>
<thead>
<tr>
<th>S #</th>
<th>Name of Company</th>
<th>Name of Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Khawar Marble.</td>
<td>Mirza M. Khawar.</td>
<td>186-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>2</td>
<td>Aslam Marble &amp; Granite.</td>
<td>Shiekh Muhammad Aslam</td>
<td>188-D,Immam Bargah St,Ichra,-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>3</td>
<td>Rizwan Marble</td>
<td>M. Shafiq</td>
<td>186-A,Immam Bargah St,Ichra,-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>4</td>
<td>Nishat Marble</td>
<td>Nadeem Aslam</td>
<td>186-Ferozepur Road, Lahore</td>
</tr>
<tr>
<td>5</td>
<td>Ishaq Marble Industry (35202-1597518-1)</td>
<td>Asim Ishaq Bhatti</td>
<td>Waseem Sajjad Road Khori, Muridke</td>
</tr>
<tr>
<td>6</td>
<td>Ittefaq Building Metrerial Stone</td>
<td>Mumtaz Faiz Ellahi</td>
<td>200-A, Ferozepur Road Glaxy Cinema, Lahore.</td>
</tr>
<tr>
<td>7</td>
<td>Ayesha Marble Factory.</td>
<td>Ch. Imran Kilo</td>
<td>173/D, Ghazi Road, Defence, Lahore.</td>
</tr>
<tr>
<td>8</td>
<td>Al Asal Marble &amp; Granite</td>
<td>Khalid Mehmood Ahmed</td>
<td>Defence Ghazi Road Near Miraj Flour Mill Cant Lahore</td>
</tr>
<tr>
<td>9</td>
<td>Waseem Marble.</td>
<td>Aga Waseem Masood</td>
<td>186-Ferozepur Road,Lahore.</td>
</tr>
<tr>
<td>10</td>
<td>Sheraz Marble.</td>
<td>Haji Abdul Razzaq.</td>
<td>186-Ferozepur Road,Lahore.</td>
</tr>
<tr>
<td>11</td>
<td>Amjad Marble Center</td>
<td>M. Amjad.</td>
<td>186-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>12</td>
<td>Al Basit Marbles</td>
<td>Javed Iqbal.</td>
<td>3-KM, Canal Bank Road Opp Muhafaz Town Lahore</td>
</tr>
<tr>
<td>13</td>
<td>Al Badar Marbles</td>
<td>Ubaid-ur-Rehman</td>
<td>188-Ferozpur Road,Quaid-e-Azam Marble.</td>
</tr>
<tr>
<td>14</td>
<td>Farooq Marble Industries</td>
<td>Zubair Ishaq Bhatti</td>
<td>208, Ferozpur Road, Lahore</td>
</tr>
<tr>
<td>15</td>
<td>Usman Associates</td>
<td>Usman Hameed Bhatti</td>
<td>1st Floor 208 Ferozpur Road Lahore</td>
</tr>
<tr>
<td>16</td>
<td>Roshan Marble &amp; Granite</td>
<td>Mian Muhammad Usman</td>
<td>Main Defence Ghazi Road Near Main CNG Station Lahore</td>
</tr>
<tr>
<td>17</td>
<td>Chenab Marble</td>
<td>Javed Hayat</td>
<td>Sundar Industrial State, Lahore</td>
</tr>
<tr>
<td>18</td>
<td>Al Taiba Marble</td>
<td>Muhammad Awis</td>
<td>Ghausia Marble Market, Ferozpur Road, Lahore</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>18</td>
<td>Kanwal stone Industry</td>
<td>Ahmed Habib</td>
<td>18-km Feroz pur road Lahore</td>
</tr>
<tr>
<td>19</td>
<td>Baba gee Marble &amp; Granite</td>
<td>Javed Iqbal.</td>
<td>House No.24-A,E Street,2 Shahtaj Colony walton Lahore</td>
</tr>
<tr>
<td>20</td>
<td>Bissmillah Marble</td>
<td>Muhammad Akram</td>
<td>Main Ghazi Road Near Meraj Flour Mill Lahore</td>
</tr>
<tr>
<td>21</td>
<td>Rizwan Traders</td>
<td>Muhammad Rizwan</td>
<td>210 Main Peco Road Model Town Lahore</td>
</tr>
<tr>
<td>22</td>
<td>New Pak Marble Industries</td>
<td></td>
<td>E 23 opp Ghazi Interchange New Airport Bhatta Chowk Lahore</td>
</tr>
<tr>
<td><strong>MARDAN</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Mardan Stones</td>
<td>Asghar Khan Utmankhel</td>
<td>Small Industrail State, Nowshehra road Mardan .</td>
</tr>
<tr>
<td>2</td>
<td>Saba Marble Factory</td>
<td>Aftab Ahmad</td>
<td>Plot-94,Nowshera Ind.Estate, Bara Banda, Risalpur.Disstrict Nowshera.</td>
</tr>
<tr>
<td>3</td>
<td>Zahid Marble Industry</td>
<td>Zahid Iqbal Khan</td>
<td>Plot # 95,Nowshera Industrial Estate Bara Banda Risalpur Nowshera.</td>
</tr>
<tr>
<td>4</td>
<td>Pak National Maarble Factory</td>
<td>Muhammad Irsal Khan (16101-5763548-5)</td>
<td>Phase II Small Industrial Estate Distt Mardan</td>
</tr>
<tr>
<td>5</td>
<td>Usman Marble Factory</td>
<td>Sagheer Ahmad</td>
<td>Small Industrail State, Nowshehra, Mardan KPK</td>
</tr>
<tr>
<td>6</td>
<td>Khattak Marble Industry</td>
<td>Afzal Shah Khattak</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>7</td>
<td>Two Star Marble Industries</td>
<td>Mohammad Iqbal</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>8</td>
<td>New JDS Marble Factory</td>
<td>Jan Mohammad</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>Renewal 2017-18</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Allied Marble Factory</td>
<td>Yousaf Khan</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>2</td>
<td>Shehzad Marble Factory</td>
<td>Irfan ullah</td>
<td>Industrial Estate, Phase 1, Nowshera Road, Mardan</td>
</tr>
<tr>
<td>2</td>
<td>Shehzad Marble Factory</td>
<td>Irfan ullah</td>
<td>Industrial Estate, Phase 1, Nowshera Road, Mardan</td>
</tr>
<tr>
<td>4</td>
<td>Afridi Marble Factory</td>
<td>Abdul Ghaffar Khan</td>
<td>Industrial Estate, Phase 2, Nowshera Road, Mardan</td>
</tr>
<tr>
<td>5</td>
<td>Gul Marble Industry</td>
<td>Khan Zeb</td>
<td>Industrial Estate, Phase 1, Nowshera Road, Mardan</td>
</tr>
<tr>
<td>6</td>
<td>Ittefaq Marble Factory</td>
<td>Jehangir Khan</td>
<td>Industrial Estate, Phase 1, Nowshera Road</td>
</tr>
<tr>
<td>7</td>
<td>G.S.N Marble</td>
<td>Hameed Ullah</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>8</td>
<td>National Marble Factory</td>
<td>Raees Khan</td>
<td>S.I.E Mardan</td>
</tr>
<tr>
<td>9</td>
<td>Friends Marble Showroom</td>
<td>Ikram Ullah</td>
<td>S.I.E, Nowshera Road Mardan</td>
</tr>
<tr>
<td>10</td>
<td>Alamzeb Marble Factory</td>
<td>Riaz Ahmed</td>
<td>A-139, Bara Banda Industrial Estate, Risalpur, Nowshera</td>
</tr>
<tr>
<td>11</td>
<td>New Asim Marble Factory</td>
<td>Iftikhar Alam</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>12</td>
<td>New Zain Marble Factory</td>
<td>Syed Zain ul Wahab</td>
<td>Small Industry Estate, Nowshera Road Mardan</td>
</tr>
<tr>
<td>13</td>
<td>Pearl Marble Factory</td>
<td>Manzoor Iqbal</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>14</td>
<td>Shahab Marble Factory</td>
<td>Syed Zainul Abidin</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>15</td>
<td>New Star Marble Factory</td>
<td>Syed Shah Jahan</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>16</td>
<td>Brothers Marble Factory</td>
<td>Liaqat Ali Afridi</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>17</td>
<td>Star Marble Factory</td>
<td>Syed Mohammad Ayaz</td>
<td>Small Industry State, Mardan</td>
</tr>
<tr>
<td>18</td>
<td>Abbas Marble Factory</td>
<td>Sultan-Ul-Arifrrn</td>
<td>Phase II Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>19</td>
<td>Sadais Marble Factory</td>
<td>Wahid Ullah</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>20</td>
<td>Ali Marble Factory</td>
<td>Muhammad Adnan</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>21</td>
<td>Sadais Marble Factory</td>
<td>Wazer Azam</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>22</td>
<td>Ihtasham Marble Factory</td>
<td>Mohammad Iqbal</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>23</td>
<td>Union Marble Factory</td>
<td>Azizur Rehman</td>
<td>S.I.E Nowshera Road Mardan</td>
</tr>
<tr>
<td>24</td>
<td>New Khurasan Marble Factory</td>
<td>Abdul Aziz</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>25</td>
<td>New Sudes Marble Factory</td>
<td>Arshed Muhammad</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>26</td>
<td>Rockmen Marble Factory</td>
<td>Habibur Rehman</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>27</td>
<td>Khaksaar Marble Factory</td>
<td>Syed Ahmed Jan</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>28</td>
<td>Hazara Marble Factory</td>
<td>Ajmal Khan</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>29</td>
<td>Superior Marbles</td>
<td>Pir Hazrat Said</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>30</td>
<td>Al-Sohaib Marble Factory</td>
<td>Pir Sohaib</td>
<td>S.I.E, Nowshera Road Mardan</td>
</tr>
<tr>
<td>31</td>
<td>Atif Marble Factory</td>
<td>Syed Rehmat Shah</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>32</td>
<td>Haq Marble Factory</td>
<td>Fazl E Haq</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>33</td>
<td>Al-Karam SS Marble Industry (Pvt.) Limited</td>
<td>Syed Sikandar Shah (16202-5343648-5)</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>34</td>
<td>Bab-E-Khyber Marble Factory</td>
<td>Sami Ullah / Saeed Ullah</td>
<td>S.I.E mardan</td>
</tr>
<tr>
<td><strong>New Members 2017-18</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Zeeshan Marble Showroom</td>
<td>Zeeshan Zada 16101-667326-5</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>2</td>
<td>Margalla Marble Factory</td>
<td>Ajoon Shah 16101-4618788-9</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>3</td>
<td>National Marble Showroom</td>
<td>Fazli Rabbi 16101-1231503-1</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>4</td>
<td>Ahmad Marble</td>
<td>Arshad Khan 16101-1575730-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>5</td>
<td>Niyaz Marble</td>
<td>Niyaz Ali 16101-4026692-3</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>6</td>
<td>Sahil Marble Factory</td>
<td>Khan Zali 16101-5473074-1</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>7</td>
<td>Shah Sani Marble Factory</td>
<td>Zahir Shah 90403-0113235-9</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>8</td>
<td>New Gul Marble Factory</td>
<td>Mukhtiar Nabi 16102-2265437-3</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>9</td>
<td>Saba Marble Factory</td>
<td>Abdul Raheem 16101-6334160-5</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>10</td>
<td>New Sky-J Marble</td>
<td>Sohail Ahmad 16101-8321082-3</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>11</td>
<td>Sarhad Marble Factory</td>
<td>Shehzad Gul 16101-4582291-9</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>12</td>
<td>Rayan Marble Factory</td>
<td>Abdul Samad 16101-9355778-1</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>13</td>
<td>Yasir Marble Factory</td>
<td>Qaiser Khan 16101-2077049-3</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>14</td>
<td>Muhammad Hamdan Marble Factory &amp; Chemical Polish</td>
<td>Zahir Shah 16101-9794592-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>15</td>
<td>Prince Marble Industry</td>
<td>Muhammad Latif 22401-1654103-5</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>16</td>
<td>New Pak National Marble Factory</td>
<td>Noor ul Islam 17201-2151000-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>17</td>
<td>Makkah Marble Industries</td>
<td>Bakhtiar Ali 17201-0578074-1</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>18</td>
<td>Yousaf Marble Factory</td>
<td>Yousaf Khan 16101-4041587-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>19</td>
<td>Shalman Marble Factory</td>
<td>Riaz Ali 16102-2303610-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>20</td>
<td>Shams Marble Industry</td>
<td>Shams Ul Aziz Khan 15601-0371571-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>21</td>
<td>Waleed Marble Factory</td>
<td>Noor Muhammad 16101-7413592-9</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td><strong>PESHAWAR</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Indus Mining Company</td>
<td>Shahid ur Rehman</td>
<td>Warsak Road, Peshawar.</td>
</tr>
<tr>
<td></td>
<td>Italian Marble</td>
<td>Kamran Atif Khan</td>
<td>Warsak Road, Michni, Mohammad Agency Fata, KPK .</td>
</tr>
<tr>
<td>2</td>
<td>Modern Marble Industry</td>
<td>M.Imran Khan</td>
<td>Worsak Road, Peshawar</td>
</tr>
<tr>
<td>3</td>
<td>Hamza Marble</td>
<td>Mushraf Ullah</td>
<td>Industrial Estate, Mulagori, Warsak Road Mohmand Agency.</td>
</tr>
<tr>
<td>4</td>
<td>Iqra Marble Factory</td>
<td>Haibat Khan</td>
<td>Warsak road darmangi garden peshawar,kpk</td>
</tr>
<tr>
<td>5</td>
<td>Shah Marble and Mining</td>
<td>Sabir Ullah</td>
<td>Near F.C post, Michni, Parchavi, Warsak Road Mohamed Agency KPK.</td>
</tr>
<tr>
<td>6</td>
<td>Pak Grinding Mills Marble &amp; Mining Company</td>
<td>M. Sabir</td>
<td>Perchaway Industrial Estate near FC Training Center, Warsak Road, Peshawar</td>
</tr>
<tr>
<td>7</td>
<td>Z and T Marble</td>
<td>Ghazanfar Ali Khan</td>
<td>Plot # B-43 Marble City Bara Banda Risalpur Peshawar</td>
</tr>
<tr>
<td>8</td>
<td>Badal Marble.</td>
<td>Haji Bismillah Khan.</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>9</td>
<td>Kundi Marble</td>
<td>Fathe Khan Kundi</td>
<td>Warsak Road Peer Bala Peshawar</td>
</tr>
<tr>
<td>10</td>
<td>Al Nasir Marble</td>
<td>Malang Jan</td>
<td>Hayattabad, Peshawar.</td>
</tr>
<tr>
<td>11</td>
<td>Jamil Marble.</td>
<td>M. Jamil.</td>
<td>shair bridge, mala gouri, khyber agency.</td>
</tr>
<tr>
<td></td>
<td>Hussaini Marble</td>
<td>Wilayat Khan / Wazir Khan</td>
<td>Near Takhtah Baig Check Post, Baara Road Shah Kais, Khyber Agency.</td>
</tr>
<tr>
<td>12</td>
<td>Marble Complex</td>
<td>M. Anwar.</td>
<td>Warsak Road Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>13</td>
<td>Unique Marble.</td>
<td>Haji Iftikhar.</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>14</td>
<td>Al Hafiz Marble</td>
<td>Abdul Baseer</td>
<td>Mohmand Agency Peshawar</td>
</tr>
<tr>
<td>15</td>
<td>Shakeel Marble.</td>
<td>Haji Tanveer Ahmed</td>
<td>Hayatabad, Peshawar.</td>
</tr>
<tr>
<td>16</td>
<td>Moon White Marble</td>
<td>Tahir Javed</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>17</td>
<td>Pak Marble</td>
<td>Adnan</td>
<td>Plot # 1-H Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>18</td>
<td>Habib Marble</td>
<td>Ihsan Ullah</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>19</td>
<td>Trich Mir Marble</td>
<td>Muhammad Khan</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>20</td>
<td>Asim Traders</td>
<td>Irshad Ali</td>
<td>Plot # F -119, near Old Labour colony Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>21</td>
<td>Z and T Marble</td>
<td>Ghazanfar Ali Khan</td>
<td>Plot No B-43 Marble City Bara Banda Risalpur Peshawar</td>
</tr>
<tr>
<td>22</td>
<td>Iqbal Marble Factory</td>
<td>Mr. Javid Iqbal</td>
<td>Warsak Road Darmangi State Peshawar</td>
</tr>
<tr>
<td>23</td>
<td>TWO STAR MARBLE</td>
<td>Usman Ghani</td>
<td>Shop 23 jan raza karkhano market jamrup road peshawar</td>
</tr>
<tr>
<td>24</td>
<td>Nazak Mir Marble Industries</td>
<td>Nazak Mir</td>
<td>Sher Burj m ulla ghori warsak road Khaber Agency Peshawar</td>
</tr>
<tr>
<td>25</td>
<td>Afridi Marble &amp; Granite</td>
<td>Shafi Ullah</td>
<td>143 Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>26</td>
<td>Indus Marble Factory</td>
<td>Fazal Karim</td>
<td>Warsak Road, IrshadAbad Peshawar</td>
</tr>
<tr>
<td>27</td>
<td>Uzair Marble Factory</td>
<td>Naseem Maqsood</td>
<td>Warsak Road, IrshadAbad Peshawar</td>
</tr>
<tr>
<td></td>
<td>Golden Marble.</td>
<td>Hidayatullah Khan</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td></td>
<td>Farhad Traders</td>
<td></td>
<td>Near Grand Hotel, University Road, Peshawar</td>
</tr>
<tr>
<td></td>
<td>Haseeb Marble &amp; Mining Company</td>
<td>Haseeb Ur Rehman (61101-3699875-3)</td>
<td>Shish Mahal Davezei, Mohamand Agency, KPK</td>
</tr>
<tr>
<td><strong>HARIPUR</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Resource Industries (Pvt.) Limited</td>
<td>ilyas Muhammad</td>
<td>Plot # 45, Pase I, Hattar Industril State, Haripur</td>
</tr>
<tr>
<td><strong>CM MEMBERS</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Indus Stone</td>
<td>Muhammad Israr Khan</td>
<td>Plot # E-126, Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>2</td>
<td>Spin Ghar Marble Industry.</td>
<td>Himat Shah</td>
<td>Warsak Road Peer bala Chawk Frontier CNG Peshawar.</td>
</tr>
<tr>
<td>3</td>
<td>Haris Trading Company</td>
<td>ilyas Muhammad</td>
<td>47,Faiz Market, Chowk Yadgar Peshawar.</td>
</tr>
<tr>
<td>4</td>
<td>Marble City</td>
<td>M. Irshad</td>
<td>Plot-123, Industrial Estate,Hayattabad, Peshawar.</td>
</tr>
<tr>
<td>5</td>
<td>Gul Marble</td>
<td>Altaf Hussain</td>
<td>Plot-38C Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>6</td>
<td>Trichmir Marble &amp; Granite</td>
<td>Khalid Saeed</td>
<td>E-126 Industrial Estate, Hayatabad Peshawar</td>
</tr>
<tr>
<td><strong>JAHANGIRA, NOWSHERA</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Noman Marble Factory.</td>
<td>Bakhtar Ali.</td>
<td>G.T.Road, Jehangira</td>
</tr>
<tr>
<td>2</td>
<td>Zubair Marble Factory</td>
<td>Namdar Khan</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>3</td>
<td>Kamran Ahmed Marble Fatory</td>
<td>Muhammad Hanif</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>4</td>
<td>Tahir Sons Marble Factory</td>
<td>Muhammad Asif Khan</td>
<td>G.T Road Jahangira Distric Nowshera</td>
</tr>
<tr>
<td>5</td>
<td>Riaz Marble Factory</td>
<td>Muhammad Riaz</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>6</td>
<td>Ittefaq Marble Factory</td>
<td>Mian Fazeelat Shah</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>7</td>
<td>Yahya Marble</td>
<td>Mir Afazl Khan</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>8</td>
<td>Aziz Marble Factory.</td>
<td>Wali-ur-Rehman.</td>
<td>G.T Road Nihalpura Nodia, Jehangira.</td>
</tr>
<tr>
<td>9</td>
<td>Popular Marble Factory</td>
<td>Samar Gul</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera.</td>
</tr>
<tr>
<td>10</td>
<td>Farooq Marble Factory</td>
<td>Haji Muhammad Farooq</td>
<td>G.T Road Kairabad Distric Nowshera</td>
</tr>
<tr>
<td>11</td>
<td>Sangum Marble Factory</td>
<td>Muhammad Islam</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera.</td>
</tr>
<tr>
<td>12</td>
<td>Asad Ali Marble Factory</td>
<td>Noor Zad Gull</td>
<td>Opp: PSO Petrolium Pump G T Road Khairabad Nowshera</td>
</tr>
<tr>
<td>13</td>
<td>Kashmir Kamran Marble</td>
<td>Kamran Naseer</td>
<td>Near Khairabad Bus Stop Afghan Hotel G.T Road Khairabad Nowshera</td>
</tr>
<tr>
<td>14</td>
<td>Ahmed Marble</td>
<td>Kabir Ahmed</td>
<td>G.T Road Nodia Jahangira Distric Nowshera</td>
</tr>
<tr>
<td>15</td>
<td>Malak Marble Industries</td>
<td>Mumtaz Ali</td>
<td>Dewana Baba Road Bachkata Chawak,Tehsil Doggar,,Disstrict Buner,KPK</td>
</tr>
<tr>
<td>16</td>
<td>Aziz Marble Factory</td>
<td>Fayaz-Ur-Rehman</td>
<td>Aziz Marble stone Factory, G.T.Road, Nodia Jehangira, Disstt Nowshera.</td>
</tr>
<tr>
<td>17</td>
<td>Hamza Marble Factory</td>
<td>Rahmat Ullah</td>
<td>G.T.Road, Nehalpura, Jehangira, Disstt Nowshera.</td>
</tr>
<tr>
<td>18</td>
<td>Muhammad Mobeen Marble Factory</td>
<td>Muhammad Naseem</td>
<td>G.T Road Nihalpura Jehangira Disstt Nowshera.</td>
</tr>
<tr>
<td>19</td>
<td>M.K Tools</td>
<td>Manawar Khan</td>
<td>G T Road, Jahangira</td>
</tr>
<tr>
<td>20</td>
<td>Al-Hayat Marble Factory.</td>
<td>Shafqat Hayat / Shaukat Hayat</td>
<td>G.T Road, Jahangira</td>
</tr>
<tr>
<td>21</td>
<td>Shoukat Marble factory</td>
<td>Haji Shoukat Saeed Khan</td>
<td>G.T Road Jehangira, Distric Nowshera.</td>
</tr>
<tr>
<td>22</td>
<td>Junaid Marble Factory</td>
<td>Sadiq Shah</td>
<td>Opposite to Jabran Kanta, Nehal Pura, G-T Road, Jehangira Disstrict Nowshera, K.P.K,</td>
</tr>
<tr>
<td>23</td>
<td>New Didar Marble</td>
<td>Mansoor Ali</td>
<td>Nehal pura G.T Road JehangiraDistt Nowshera</td>
</tr>
<tr>
<td>26</td>
<td>Insaf Marble</td>
<td>Rahmat Ullah</td>
<td>G.T Road Jehangira Disstt Nowshera.</td>
</tr>
<tr>
<td>27</td>
<td>Suliman Marble</td>
<td>Abdul hakeem</td>
<td>G T Road Jahangira</td>
</tr>
<tr>
<td>28</td>
<td>Pang pir Marble</td>
<td>Muhammad Asif Khan</td>
<td>G T Road Jahangira</td>
</tr>
<tr>
<td>29</td>
<td>Tonsa Marble Factory</td>
<td>Muhammad Aslam</td>
<td>Nodia Utrah, G.T.Road Jehangira, Disstt Nowshera.</td>
</tr>
<tr>
<td>30</td>
<td>Azad Marble Factory</td>
<td>Sami Ullah</td>
<td>G.T.Road Nodia, Jehangira, Disstt Nowshera.</td>
</tr>
<tr>
<td>31</td>
<td>Atiq-Ur-Rehman Marble Factory</td>
<td>Feroz Shah</td>
<td>G-T Road, Near Nari Pull, Jehangira, Disstrict Nowshera.</td>
</tr>
<tr>
<td>32</td>
<td>Zam Zam Marble Factrory</td>
<td>Qamer Zaman</td>
<td>G-T Road, Near Nari Pull, Jehangira, Disstrict Nowshera.</td>
</tr>
<tr>
<td>33</td>
<td>Shehryar&amp;Awais</td>
<td>Muhammad Iqbal</td>
<td>Nihal pura p.o.box khairabad Distt Noshara</td>
</tr>
<tr>
<td>34</td>
<td>Fronter Punjab</td>
<td>Abdul Razaaq</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>35</td>
<td>New Didar Marble</td>
<td>Mansoor Ali</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>36</td>
<td>Imaad Marble</td>
<td>Sheir Wali Khan</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>37</td>
<td>Arif &amp; Suns Marble</td>
<td>Shoukat Mehmood</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>38</td>
<td>Wali Marble Factory</td>
<td>Nihar Ahmed</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>39</td>
<td>New Ittehad Marble</td>
<td>Fazal Bacha</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>40</td>
<td>Usman Chips &amp; Marble Factory</td>
<td>Fayaz-Ur-Rehman</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>41</td>
<td>Khattak Marrble</td>
<td>Majid Shah Khattak</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>42</td>
<td>Ghulam Mustafa Marble</td>
<td>Mohammad Khalid</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>43</td>
<td>Pir Marble</td>
<td>Nisar Ahmad</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>44</td>
<td>Luqman Marble</td>
<td>Khan Muhammad</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>45</td>
<td>Haris Marble</td>
<td>Muhammad Seyar Khan</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>46</td>
<td>Qadir Marble</td>
<td>Qadir Yar</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>47</td>
<td>Marble International Factory</td>
<td>Khalid Iqbal</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>48</td>
<td>Chaudhary Marble</td>
<td>Nigar Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>49</td>
<td>Ihsan Marble</td>
<td>Muneer Khan</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>50</td>
<td>Ishtiaq Marble</td>
<td>Ishraq Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>51</td>
<td>Bunir Marble</td>
<td>Saddiq Abbas</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>52</td>
<td>Dir Marble</td>
<td>Gul Abbas</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>53</td>
<td>Kohinoor Marble</td>
<td>Farooq Azam</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>54</td>
<td>Nawab Marble</td>
<td>Nawab Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>55</td>
<td>Rehman Marble</td>
<td>Sajid Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>56</td>
<td>Mian Marble</td>
<td>Inam Ullah</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>57</td>
<td>Adnan Marble</td>
<td>Amjad Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>58</td>
<td>Sangam Marble</td>
<td>Muhammad Islam / Shahab Islam</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>New Members 2017-18</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>59</td>
<td>Hussain Marble Factory</td>
<td>Noshad Ali 17201-8795653-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>60</td>
<td>Taqwa Marble</td>
<td>Saltanat Khan 17201-2218504-5</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>61</td>
<td>Kabeer Marble Industry</td>
<td>Kabeer Ahmad Khan 17201-5676082-1</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>62</td>
<td>Ahmed Marble Industry</td>
<td>Nazir Ahmad 17201-7531668-9</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>63</td>
<td>Tariq Ayub Marble Factory</td>
<td>Gul Nawab Khan 17201-2272494-3</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>64</td>
<td>Yahya Marble Factory</td>
<td>Muzafar Khan 17201-2321961-5</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>65</td>
<td>Pakistan Marble Chips Factory</td>
<td>Abdul Rehman 17201-2216278-5</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>66</td>
<td>Pak Afridi Marble Industries</td>
<td>Muhammad Parvez Khan 17201-2311704-3</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>67</td>
<td>Musa Marble Factory</td>
<td>Safdar Khan 17201-8146720-5</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>68</td>
<td>Zahid Marble Factory</td>
<td>Zahid Ali Zahid 34502-6076868-5</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>69</td>
<td>Al Sudais Marble Factory</td>
<td>Lal Badshah 17201-2083591-9</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>70</td>
<td>Hasnat Marble Facrory</td>
<td>Muhammad Khalid Khan 17201-4928360-1</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>71</td>
<td>Imtiaz Marble Factory</td>
<td>Imtiaz Ali Shah 17201-2295639-5</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>72</td>
<td>Imperial Marble and Chips Industries</td>
<td>Nasir Khan 17201-2367020-1</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>73</td>
<td>Makka Marble Factory</td>
<td>Rustam Khan 17201-5103298-7</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>74</td>
<td>Sheharyar Marble Factory</td>
<td>Sheharyar Khan 17201-5453003-1</td>
<td>G.T Road, Nowshera</td>
</tr>
<tr>
<td>75</td>
<td>Gul Marble Factory</td>
<td>Faqeer Gul 16201-4719872-9</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>76</td>
<td>Araaf Marble Factory</td>
<td>Muhammad Ashfaq 17201-2150896-7</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>77</td>
<td>Zaakir Marble &amp; Chips Factory</td>
<td>Zahid Iqbal 17201-2276741-9</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>78</td>
<td>Gohar Marble Industry</td>
<td>Gohar Zaman 61101-9210378-7</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>79</td>
<td>United Marble Industry</td>
<td>Jamshed Ali 17201-2202157-7</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>80</td>
<td>Amrina Marble</td>
<td>Muhammad Zahid 16201-0744592-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>81</td>
<td>Shama Marble Factory</td>
<td>Israil Khan 17201-2218094-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>82</td>
<td>Hussain Marble Factory</td>
<td>Pur Dil Khan 16201-2487584-9</td>
<td>G.T Road, Nowshera</td>
</tr>
<tr>
<td>83</td>
<td>Tounsa Marble Factory</td>
<td>Asmat Nawaz 32103-6937340-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>84</td>
<td>Nobat Khan Marble Factory &amp; Grinding Mills</td>
<td>Nobat Khan 17201-2228080-9</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>85</td>
<td>Shahzeb Marble Factory</td>
<td>Mushtaq Ahmad 42401-6544578-1</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>86</td>
<td>Yaseen Marble Factory</td>
<td>Atiq Ur Rehman 37303-7720987-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>87</td>
<td>Imran Marble Industry</td>
<td>Shaukat Imran 17201-4318414-9</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td><strong>CHARSADDA</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Pak Marble industry</td>
<td>Shakir Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>2</td>
<td>Marble Zone Industries</td>
<td>Imdad Hussain</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>5</td>
<td>Farman Marble Traders</td>
<td>Farman Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>6</td>
<td>Lasani Marble Factory International (17101-0325282-3)</td>
<td>Naimat Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>7</td>
<td>Sarhad Marble</td>
<td>Amanat Khan</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>8</td>
<td>New Ziarat Marble Factory</td>
<td>Noor Rehman Saafi</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>9</td>
<td>Samnat Marble Industry</td>
<td>Haji Gul Bahadar</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>10</td>
<td>Shah Khalid Saafi Marble Factories</td>
<td>Shah Khalid</td>
<td>Khwaja wass near Safel korona Shabqadar Fort</td>
</tr>
<tr>
<td>11</td>
<td>Naseer Saafi Marble factory</td>
<td>Momin Khan</td>
<td>Industrial State, Subhan Khwar, tehsial Shabqadar fort, disst Charsadda</td>
</tr>
<tr>
<td>12</td>
<td>Frontier Marble</td>
<td>Imran Khan</td>
<td>Subhan Khawar Industrial Estate Tehsil Shabqadar Charsadda</td>
</tr>
<tr>
<td>13</td>
<td>Hamza Marble Industry</td>
<td>Hamza ullah Khan</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>14</td>
<td>Universal Mining Company</td>
<td>Rahim Shah / Sultan Shah (17101-0402933-5)</td>
<td>Pir Qalla Mohmand Agency,Tehsil Shabqadar Charsadda</td>
</tr>
<tr>
<td>15</td>
<td>Umer Marble Industry (card sent)</td>
<td>Muhammad Nawaz</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>16</td>
<td>Azam Marble</td>
<td>Sheraz Liaqat</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>17</td>
<td>Sikndar Khan Marble &amp; Quadars Powder Factory</td>
<td>Arshad</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>18</td>
<td>Insaf Marble Industry</td>
<td>M.Ibrahim</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>19</td>
<td>Classic Marble</td>
<td>Ilyas</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>20</td>
<td>Shabqadar Marble</td>
<td>Darbar Ali</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>21</td>
<td>Jamshed Marble</td>
<td>Abd-ur-Rehman</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>22</td>
<td>Gul Shali Marble</td>
<td>Nasr Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>23</td>
<td>Rehan Marble</td>
<td>Mian Wali Gul</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>24</td>
<td>Faisal Marble</td>
<td>Rizwan Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>25</td>
<td>Mian Marble Factory</td>
<td>Mian Wali Gul</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>26</td>
<td>S.A.M Minning &amp; Marble (Card sent)</td>
<td>Saeed Khan</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>27</td>
<td>Naveed Marble (card sent)</td>
<td>Inayat Ur Rehman</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>28</td>
<td>Haseeb Marble &amp; Mining Compnay</td>
<td>Haseeb Ur Rehman</td>
<td></td>
</tr>
<tr>
<td><strong>SWAT</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Silko marble</td>
<td>Abu bakar Siddque</td>
<td>G.T Road Barikot Swat.</td>
</tr>
<tr>
<td>2</td>
<td>Ahmad Marble</td>
<td>Abaidullah</td>
<td>Khawaja abad Pangorah Distt ,Teh Swat</td>
</tr>
<tr>
<td>3</td>
<td>PAMIR Marble &amp; Granite</td>
<td>SARDAR ALI</td>
<td>Near AYoub Bridge Kanju Swat</td>
</tr>
<tr>
<td>4</td>
<td>Ahmad Marble</td>
<td>Abaidullah</td>
<td>Khawaja abad Pangorah Distt ,Teh Swat</td>
</tr>
</tbody>
</table>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/04.associate-members/associate-members-2016-2017";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table>
<thead>
<tr>
<th>Associate Members List 2017-18</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>ISLAMABAD</strong></td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Rana Marble</td>
<td>M.Sohail Rana</td>
<td>Plot-414, I-9 Islamabad.</td>
</tr>
<tr>
<td>2</td>
<td>Orient Marble</td>
<td>Haji M. Aslam</td>
<td>Plot-84, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>3</td>
<td>Star Marble Tiles</td>
<td>Mian Abdul Sami</td>
<td>Plot-215,St-7,I-9/3, Islamabad</td>
</tr>
<tr>
<td>4</td>
<td>Saeed Marble</td>
<td>Haroon Rashid</td>
<td>Plot 137-C, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>5</td>
<td>National Marble Industry.</td>
<td>Naeem Mughal</td>
<td>Plot-137/D, I-9/2, Islamabad</td>
</tr>
<tr>
<td>6</td>
<td>Star Marble Industry</td>
<td>Aqeel Ahmed</td>
<td>Plot-40-41, I-9/2,Islamabad.</td>
</tr>
<tr>
<td>7</td>
<td>Citi Marble</td>
<td>Ch Abdul Khaliq</td>
<td>Plote# 277, Street#2,I-9/3 Islamabad.</td>
</tr>
<tr>
<td>8</td>
<td>Unique Marble</td>
<td>Yaseen</td>
<td>Plot-253-B, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>9</td>
<td>Swat Marble Industry</td>
<td>Imran Khan (61101-1732788-1) / Sher Afsar</td>
<td>Plot-137-H, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>10</td>
<td>Iram Marble</td>
<td>Imtiaz Amjad</td>
<td>Plot-114,St-15,I-9/2, Islamabad</td>
</tr>
<tr>
<td>11</td>
<td>New Bagh Marble Industry</td>
<td>Nasir Khan</td>
<td>Plot-42,St-11,I-9/2,Islamabad</td>
</tr>
<tr>
<td>12</td>
<td>Mughal Marble Factory</td>
<td>Saeed Khan</td>
<td>Plot-7,Industrial Area I-9/2, Islamabad.</td>
</tr>
<tr>
<td>13</td>
<td>Naseem Marble.</td>
<td>Naseem Ahmed</td>
<td>Plot-163,St-9, Industrial Area, I-10/3. ISB.</td>
</tr>
<tr>
<td>14</td>
<td>Crescent Marble.</td>
<td>Abid Rasheed.</td>
<td>Plot-274, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>15</td>
<td>Khalid Marble</td>
<td>Khalid Mahmood Mian</td>
<td>14-B I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>16</td>
<td>Pak ONYX Marble</td>
<td>Mian Aamir Majeed</td>
<td>Unit-2, I-9 Markaz, ISB</td>
</tr>
<tr>
<td>17</td>
<td>K-2 Marble.</td>
<td>Shiekh Rizwan.</td>
<td>Plot-126 A,St-15,I-9/2 Islamabad</td>
</tr>
<tr>
<td>18</td>
<td>Farrukh Granite Art</td>
<td>Mian Farrukh majeed</td>
<td>Unit-2, plot # 2/D I-9 Markaz, ISB</td>
</tr>
<tr>
<td>19</td>
<td>Nagina Marble.</td>
<td>Sh. Azmat Ali</td>
<td>2-K Plaza, Unit-6, I-9 Markaz ISB</td>
</tr>
<tr>
<td>20</td>
<td>Hassan Marble.</td>
<td>Muhammad Aftab Qazi.</td>
<td>Plot-375, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>21</td>
<td>Atlas Marble.</td>
<td>Muhammad Waseem Javed</td>
<td>Plot-137/E,I-9 Islamabad.</td>
</tr>
<tr>
<td>22</td>
<td>Stone Master Marble.</td>
<td>Sh. M. Arshad</td>
<td>I-9 Markaz, Islamabad</td>
</tr>
<tr>
<td>23</td>
<td>Variety Stone Care</td>
<td>Mushtaq Ahmed</td>
<td>Marble Plaza, I-9 Islamabad.</td>
</tr>
<tr>
<td>24</td>
<td>Trichmir Marble.</td>
<td>Amirzada Khan</td>
<td>I-9 Markaz, Islamabad.</td>
</tr>
<tr>
<td>25</td>
<td>Farooq Marble &amp; Granite</td>
<td>Tayyab hameed Bhatti (35202-1429397-1)</td>
<td>20-A waraich plaza I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>26</td>
<td>Commercial Engineering.</td>
<td>M. Akram Mughal.</td>
<td>P-256, St-8, I-9/3 Islamabad.</td>
</tr>
<tr>
<td>27</td>
<td>Bajour Marble.</td>
<td>Jalal-ud-Din Akbar</td>
<td>I-9 Markaz, Islamabad.</td>
</tr>
<tr>
<td>28</td>
<td>Ali Marble</td>
<td>Sharafat Ali Shah</td>
<td>Plaza 16-B Shop # 9 Opp Sui Gas Office I-9 Markaz ISB</td>
</tr>
<tr>
<td>29</td>
<td>Al-Syed Trading Company</td>
<td>Syed M Abbass</td>
<td>Shop # 8 Block # 46 Near PIA Building Blue Area Islamabad</td>
</tr>
<tr>
<td>30</td>
<td>SS Marble and Granite</td>
<td>Shah Khan</td>
<td>Shop # 01, Plot # 14-D, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>31</td>
<td>Hussain Trading</td>
<td>Moazzam Saleem (BM)</td>
<td>16-A, Marble Plaza, I-9</td>
</tr>
<tr>
<td>32</td>
<td>Sohail Brothers</td>
<td>Sohail Khan Baber</td>
<td>Plot # 43, St # 11, I-9/2 Islamabad</td>
</tr>
<tr>
<td>33</td>
<td>Al-Mehria Marble &amp; Granite</td>
<td>Muhammad Altaf</td>
<td>Office # 01,K-2 Plaza, I-9 Markaz Islamabad.</td>
</tr>
<tr>
<td>34</td>
<td>King Stone Marble</td>
<td>Ghulam Mustafa.</td>
<td>Off-7, Pothar Plaza, I-9</td>
</tr>
<tr>
<td>35</td>
<td>Kohinoor Marble</td>
<td>Anwar Hussain.</td>
<td>Shop-2, Mehmood Plaza, I-9</td>
</tr>
<tr>
<td>36</td>
<td>Lawari Granite</td>
<td>Muhammad Ishfaq Khan</td>
<td>Shop # 10 Mehmood plaza I-9 Islamabad</td>
</tr>
<tr>
<td>37</td>
<td>Nadar Marble</td>
<td>Iftikhar Ahmad Waraich</td>
<td>Gilani Plaza Shop # 5 I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>38</td>
<td>Natural Marble.</td>
<td>Syed sattar Hussain</td>
<td>Office # 6-B Shaheen Centre I-9 Islamabad</td>
</tr>
<tr>
<td>39</td>
<td>Pakistan Marble.</td>
<td>Haji Bin Yameen</td>
<td>Shop # 6, Talal Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>40</td>
<td>Rehman Tools</td>
<td>Farooq Ahmed</td>
<td>3-414 C, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>42</td>
<td>Swat Marble Factory</td>
<td>Imtiaz Ali</td>
<td>Plot # 137 I-9 Islamabad</td>
</tr>
<tr>
<td>43</td>
<td>Talha Marble &amp; granite</td>
<td>Malik Sajid</td>
<td>Office # 4 Bhati palaza I-9 Islamabad</td>
</tr>
<tr>
<td>44</td>
<td>Marble Art Gallery</td>
<td>Ashiq Mehmood.</td>
<td>Shop-4-5,Mehmood Plaza I-9 markaz Isb.</td>
</tr>
<tr>
<td>45</td>
<td>Pathar Ghar</td>
<td>Muhammad Feroz</td>
<td>Shop # 3 Marble Plaza Near Sui Gas Office i-9 Markaz Islamabad</td>
</tr>
<tr>
<td>46</td>
<td>Amish Marble Industry</td>
<td>M. Irfan Zafar (61101-3495034-7)</td>
<td>Plot # 57 St # 13 Industrial Area I-9/2 Islamabad</td>
</tr>
<tr>
<td>47</td>
<td>Shafi Ullah Marble &amp; Granite</td>
<td>Shafi Ullah</td>
<td>Shop 23,Marble Plaza, 16-A Near CNG Pump, I-9 Islamabad</td>
</tr>
<tr>
<td>48</td>
<td>Thar Mineral Processing Comp</td>
<td>Husain Ahmed</td>
<td>Plot#279 Ind Estate opp Model Town Khutta Rd ISB</td>
</tr>
<tr>
<td>49</td>
<td>Khan Marble</td>
<td>Ahmad Khan</td>
<td>Mehmood Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>50</td>
<td>Babar Marble Industry</td>
<td>Babar Ali</td>
<td>Flat no. 405, Abu Dabi Tower F-11/1 Islamabad.</td>
</tr>
<tr>
<td>51</td>
<td>Anmol Marble</td>
<td>Noor ul wahab</td>
<td>Near sohan signal porani chungi service road, ISB</td>
</tr>
<tr>
<td>52</td>
<td>Shan Granite &amp; Marble.</td>
<td>Asif Manzoor</td>
<td>Unit-7, 2-K Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>53</td>
<td>Shahid Marble</td>
<td>Shahid Ullah</td>
<td>Plot # 14-D shop # 3 Opp: OGDCL I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>54</td>
<td>Parleno Marble</td>
<td>Anwar Muhammad</td>
<td>Shop#9, K-2Plaza I-9 Market Islamabad</td>
</tr>
<tr>
<td>55</td>
<td>Kashif marble</td>
<td>m.razzaq</td>
<td>Shop # 3, Bhatti Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>56</td>
<td>The stone art gallery</td>
<td>Ashiq hussain</td>
<td></td>
</tr>
<tr>
<td>57</td>
<td>Mazhar Shah Marble</td>
<td>Mazhar Shah</td>
<td>shop .2 Mehmood Plaza i-9 Markaz Islamabad.</td>
</tr>
<tr>
<td>58</td>
<td>Stones Valley</td>
<td>Muhammad Ishaq</td>
<td>4th flour Al Falah Tower mini commercial Area Phase 7 Bahria Town Islamabad.</td>
</tr>
<tr>
<td>59</td>
<td>Aashiana Marble &amp; Granite</td>
<td>Ismail Shah</td>
<td>Shop # 8, Mehmood Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>60</td>
<td>Saleem Marble &amp; Granite</td>
<td>Muhammad Saleem</td>
<td>Shop # 10, Bewal Plaza, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>61</td>
<td>Malik Marble &amp; Granite</td>
<td>Malik Yaqoob</td>
<td>Office # 2, Plot # 14-D, I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>62</td>
<td>Sahal Marble &amp; Granite</td>
<td>Fazal Hussain Khan</td>
<td>Showroom # 1, Bhatti Plaza, i-9 Markaz Islamabad</td>
</tr>
<tr>
<td>63</td>
<td>Daniyal Marble</td>
<td>Anwar Badshah</td>
<td>Shop # 11, Mehmood Plaza i-9 Markaz Islamabad.</td>
</tr>
<tr>
<td>64</td>
<td>Gulls International</td>
<td>Muhammad Younus</td>
<td>K-2 Plaza, I-9 Markaz, Islamabad</td>
</tr>
<tr>
<td>64</td>
<td>Haider Marble</td>
<td>Arshad Ali (61101-1934660-3)</td>
<td>Plot # 375-B, Potohar road, I-9/3 Islamabad</td>
</tr>
<tr>
<td>65</td>
<td>Syed And Khokar Tiles &amp; Granite</td>
<td>S. Mazhar Hussain Rizvi (37405-6984177-1) Muhammad Akmal, Director (37405-5486998-9)</td>
<td>Shop # 2, Bhatti Plaza, I-9 Islamabad</td>
</tr>
<tr>
<td>65</td>
<td>Amir Hamza Marble</td>
<td>Shams Ul Wahab</td>
<td>6-Bewal Plaza, I-9 Markaz, Islamabad</td>
</tr>
<tr>
<td>65</td>
<td>Syed Marble Tiles &amp; Granite</td>
<td>S. Mazhar Hussain Rizvi (37405-6984177-1)</td>
<td>Shop # 10, Potohar Plaza, I-9 Markaz Islamabad</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th></th>
<th></th>
<th><strong>SANGJANI</strong></th>
<th></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Abdullah Marble</td>
<td>Haji M. Abdullah.</td>
<td>G.T. Road, Sangjani. ISB.</td>
</tr>
<tr>
<td>2</td>
<td>A.R. Marble / Rehman Tools</td>
<td>Abdul Rehman</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>3</td>
<td>New Golden Marble.</td>
<td>Mansaf Khan / Hamid Ali</td>
<td>Near Kohistan Petroleum Sangjani Islamabad</td>
</tr>
<tr>
<td>4</td>
<td>Khokhar Marble</td>
<td>Muhammad Ajmal</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td></td>
<td>Ayaz Marble</td>
<td>Sherdil Khan</td>
<td>Near ISD Motorway Interchange Chungi # 26 ISD</td>
</tr>
<tr>
<td>5</td>
<td>Chaudhry Shahzad Marble &amp; Granite</td>
<td>Chaudhry Shahzad</td>
<td>Near Kohistan Petrol Pump,Industrial estate G.T Road Sangjani</td>
</tr>
<tr>
<td>6</td>
<td>Margalla Marble</td>
<td>Malik M.Munir</td>
<td>Toll Plaza Sangjani Islamabad</td>
</tr>
<tr>
<td>7</td>
<td>Sohail Marble</td>
<td>Muhammad Tariq</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>8</td>
<td>Madni Marble &amp; Granite</td>
<td>Noor Rehman</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>9</td>
<td>Samir Khokhar Industry</td>
<td>Muhammad Fiaz</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>10</td>
<td>Mehran Marble</td>
<td>Malik Awan/ Yaseen</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>11</td>
<td>Al Sharif Marble</td>
<td>Imran / Zulfiqar Ahmed</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>12</td>
<td>Frontier Marble Factory</td>
<td>M. Younas</td>
<td>Near Kohistan Petroleum , Sangjani, ISB</td>
</tr>
<tr>
<td>13</td>
<td>Lasani marble Factory</td>
<td>Bin Yameen</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>14</td>
<td>Najeeb Hardware Store</td>
<td>Najeeb-ullah khan Nasir</td>
<td>Marble market, Near Kohistan Pump, G.T Road Sangjani Islamabad</td>
</tr>
<tr>
<td>15</td>
<td>Diamond Marble</td>
<td>Malik Jahangir / Muhammad Waseem</td>
<td>GT Road Near Shell Petrol Pump, Sangjani Islamabad</td>
</tr>
<tr>
<td>16</td>
<td>5 Star Marble Industries</td>
<td>Muhammad Arif</td>
<td>Near Kohistan Shell Petrol Pump, Peshawar Road, Sangjani Islamabad</td>
</tr>
<tr>
<td>17</td>
<td>AL Madina Marble and granite</td>
<td>Ibrar Ul Haq (36502-6764164-9)</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>18</td>
<td>Royal Marble</td>
<td>Iltaf Hussain</td>
<td>Tool Plaza Sangjani Islamabad</td>
</tr>
<tr>
<td>19</td>
<td>Aswad Marble</td>
<td>Bilal ALI</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>20</td>
<td>Umer Marble</td>
<td>Bashir Ahmed</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>21</td>
<td>New Sadaat Marble</td>
<td>Syed Tahir Jamil</td>
<td>Near Kohistan Petrol Pump Sangjani Islamabad</td>
</tr>
<tr>
<td>22</td>
<td>Sabri Marble</td>
<td>Muhammad Asim</td>
<td>Near Toll Plaza, G.T Road, Sangjani, Islamabad</td>
</tr>
<tr>
<td>23</td>
<td>Pearl Marble</td>
<td>Fazal Khaliq</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>24</td>
<td>MZA Marble</td>
<td>Parvez</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>25</td>
<td>Hashim Marble</td>
<td>Shams Ud din</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>26</td>
<td>Sethi Marble</td>
<td>Faheem</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>27</td>
<td>Shandoor Marble</td>
<td>javed</td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
<tr>
<td>28</td>
<td>Mehria Marble</td>
<td></td>
<td>G.T. Road, Sangjani, ISB.</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>RAWALPINDI</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Watan Marbles</td>
<td>Shoaib Hamid</td>
<td>Westridge-III, Rawalpindi.</td>
</tr>
<tr>
<td>3</td>
<td>Mehria Marble.</td>
<td>Malik M. Manzoor Elahi</td>
<td>Near Watan Mill, W-II, RWP.</td>
</tr>
<tr>
<td>4</td>
<td>Ali Zaman Marble</td>
<td>Malik M. Arfeen</td>
<td>Raja Gulab Markete, W-III Rawalpindi</td>
</tr>
<tr>
<td>5</td>
<td>Madina Marble.</td>
<td>Naseeb ul Ghani.</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>6</td>
<td>Hussain Marble.</td>
<td>Shafqat Nadeem Saqib.</td>
<td>Range Road, W-III, Rawalpindi</td>
</tr>
<tr>
<td>7</td>
<td>Siran Marble.</td>
<td>M. Arshad Mehmood</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>8</td>
<td>Kohinoor Marble Factory.</td>
<td>Abdul Wadood</td>
<td>Tarnoli Markete W-III Rawalpindi</td>
</tr>
<tr>
<td>9</td>
<td>Cantt Marble</td>
<td>Shahid Mehmood.</td>
<td>Near Watan Mill, W-II RWP</td>
</tr>
<tr>
<td>10</td>
<td>New Saeed Marble</td>
<td>Saeed ur Rehman</td>
<td>Industrial Area, W-II RWP.</td>
</tr>
<tr>
<td>11</td>
<td>Ajmair Sharif Marble.</td>
<td>Abdul Hafeez.</td>
<td>Industrial Area, W-II RWP.</td>
</tr>
<tr>
<td>12</td>
<td>Bakhtawar Hardware &amp; Marble</td>
<td>Habib Ullah Khan</td>
<td>Shop#3, Mohallah Hafiz Abad, Westreg II, Rawalpindi</td>
</tr>
<tr>
<td>13</td>
<td>Al Noor Marble</td>
<td>Haroon Shah .Khattak</td>
<td>Near EMP Army, W-III RWP.</td>
</tr>
<tr>
<td>14</td>
<td>Westridge Marble.</td>
<td>Shamsheer Ali.</td>
<td>Near Rawal Kanta, W-III RWP.</td>
</tr>
<tr>
<td>15</td>
<td>Marhaba Marble</td>
<td>Haji Mushtaq Hussain</td>
<td>EMP Army, Range Road, W-III RWP</td>
</tr>
<tr>
<td>16</td>
<td>Stone Mart .</td>
<td>M. Ilyas.</td>
<td>Near Punjab Flour Mill. RWP</td>
</tr>
<tr>
<td></td>
<td>Sadaat Marble</td>
<td>Syed Tahir Jamil</td>
<td>MISRIAL ROAD RAWALPINDI</td>
</tr>
<tr>
<td>17</td>
<td>Abdul wahab Khan Marble</td>
<td>Azim Ahmad Khan Lughmani</td>
<td>383/27, Street # 2, Misrial Road Rawalpindi Cantt</td>
</tr>
<tr>
<td>18</td>
<td>Ahsan Marble</td>
<td>Zulfiqar Hussain</td>
<td>Industial Area Range Road W-III Rawalpindi</td>
</tr>
<tr>
<td>19</td>
<td>Mian Khan Marble</td>
<td>Mian Khan</td>
<td>Westridge II RWP</td>
</tr>
<tr>
<td>20</td>
<td>Shan Marble</td>
<td>Arshad Mehmood</td>
<td>Industrial Area W-III RWP</td>
</tr>
<tr>
<td>21</td>
<td>New Ehtasham Marble.</td>
<td>Muhammad Naseer</td>
<td>Near Rawal Kanta Range Road, W- RWP.</td>
</tr>
<tr>
<td>22</td>
<td>Gull Marble</td>
<td>Irfan Khan/Amjad Khan</td>
<td>Industry Area W-II Rawalpindi</td>
</tr>
<tr>
<td>23</td>
<td>Iqbal Marble Factory</td>
<td>Zahid Manzoor</td>
<td>Chand Mari Road W-III Near Rawal Kanta RWP</td>
</tr>
<tr>
<td>24</td>
<td>Prime Marble</td>
<td>Raja Arsshad / Raja Shahid Mumtaz</td>
<td>Range Road Rawalpindi</td>
</tr>
<tr>
<td>25</td>
<td>Ramzan Marble Showroom</td>
<td>Mr. M. Ramzan.</td>
<td>Range Road, Westridge, RWP.</td>
</tr>
<tr>
<td>26</td>
<td>Mehran Marble</td>
<td>M. Ilyas.</td>
<td>Range Road, Westridge, RWP.</td>
</tr>
<tr>
<td></td>
<td>Subhan Marble</td>
<td>Ehsan Rafeeq</td>
<td>Chakmada Khan Westrige II Rawalpindi</td>
</tr>
<tr>
<td>27</td>
<td>Zahoor Marble</td>
<td>Haji Zahoor Ahmad</td>
<td>Near Watan Mill, W-II, RWP.</td>
</tr>
<tr>
<td>28</td>
<td>Awais Chakwal Stone</td>
<td>Arshad Mehmood</td>
<td>Industrial Area W-III RWP</td>
</tr>
<tr>
<td>29</td>
<td>Buneer Marble</td>
<td>Abdul wahab</td>
<td>Range Road Westridge III Rawalpindi</td>
</tr>
<tr>
<td>30</td>
<td>Usman Marble Show Room</td>
<td>Malik Zulfiqar Ali</td>
<td>Range Road Westridge III Rawalpindi</td>
</tr>
<tr>
<td>31</td>
<td>Hassan Marble</td>
<td>Raja Nasir Mehmood</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>32</td>
<td>Zam Zam Marble</td>
<td>M. Farooq Khan</td>
<td>Near Punjab floor mill-Westriage 3, Rawalpindi.</td>
</tr>
<tr>
<td>33</td>
<td>P.K Marble</td>
<td>Saqib</td>
<td>Westridge III Rawalpindi</td>
</tr>
<tr>
<td>34</td>
<td>Mumtaz Marble Point</td>
<td>Waqar Ahmed</td>
<td>Shop # 4-62/A Chak Madad Khan Westridge III RWP</td>
</tr>
<tr>
<td>35</td>
<td>Al Azeem Marble</td>
<td>Ghulam Mustafa.</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>36</td>
<td>Frontier Marble Showroom.</td>
<td>M. Ashraf.</td>
<td>Range Road, Westridge, RWP</td>
</tr>
<tr>
<td>37</td>
<td>Hajvairi Marble.</td>
<td>M. Yaqoob.</td>
<td>Range Road, Westridge, RWP.</td>
</tr>
<tr>
<td>38</td>
<td>Friends Marble.</td>
<td>Riaz Ahmed.</td>
<td>Near Punjab Flour Mill, W-II RWP</td>
</tr>
<tr>
<td>39</td>
<td>Fine Marble.</td>
<td>Faheem Ud din.</td>
<td>Near Punjab Flour Mill,W-II RP.</td>
</tr>
<tr>
<td>40</td>
<td>Marble Point</td>
<td>Hafiz nasir Zahoor</td>
<td>Industrial Area Near Punjab Flour Mill W-II RWP</td>
</tr>
<tr>
<td>41</td>
<td>Khattak Marble.</td>
<td>Sajid Shah.</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>42</td>
<td>Ghantoot Marble</td>
<td>Sajjad Hayat</td>
<td>Industrial Area W-III Rawalpindi</td>
</tr>
<tr>
<td>43</td>
<td>Chinar Marble</td>
<td>Javeed Khan</td>
<td>Industrial Area Chak Madad Khan, Rawalpindi</td>
</tr>
<tr>
<td>44</td>
<td>Ibrahim Marble</td>
<td>Insaaf Khan</td>
<td>Industrial Area W-III Rawalpindi</td>
</tr>
<tr>
<td>45</td>
<td>Javeed Marble</td>
<td>Javeed Khan</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>46</td>
<td>Taqwa Marble</td>
<td>Raja Faisal</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>47</td>
<td>Nice Marble</td>
<td>Asif Mehmood</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>48</td>
<td>Tahir Granite</td>
<td>Tahir Mehmood</td>
<td>Westridge III Rawalpindi</td>
</tr>
<tr>
<td>49</td>
<td>99 Stone Marble</td>
<td>Abid Ali</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>50</td>
<td>Rehman Marble</td>
<td>Shafeeq</td>
<td>Westridge III Rawalpindi</td>
</tr>
<tr>
<td>51</td>
<td>mumtaz Marble Point</td>
<td>Iqbal</td>
<td>Westridge III Rawalpindi</td>
</tr>
<tr>
<td>52</td>
<td>Parlino House</td>
<td>Azhar khurshid</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>53</td>
<td>Shaheer Marble</td>
<td>Raja Adeel</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>54</td>
<td>New Kashmir</td>
<td>Abdul Kareem</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>55</td>
<td>Pak Watan</td>
<td>Nasir Mehmood</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>56</td>
<td>Waqas Marble Factory</td>
<td>WAQAS</td>
<td>Small Industrial Rashakai Mardan</td>
</tr>
<tr>
<td>57</td>
<td>Iqra Marble&amp; Granite</td>
<td></td>
<td>Spin zar plaza I /9 Markaz Islamabad</td>
</tr>
<tr>
<td>58</td>
<td>Aljannat Marble&amp;Granite</td>
<td>Malik Salman</td>
<td>Range road industrial Area westridge</td>
</tr>
<tr>
<td>59</td>
<td>Sadaat Marble</td>
<td>Syed Tahir Jamil</td>
<td>MISRIAL ROAD RAWALPINDI</td>
</tr>
<tr>
<td>60</td>
<td>New Ittehad Marble</td>
<td>Ali Akber</td>
<td>Westridge-III, Rawalpindi.</td>
</tr>
<tr>
<td>65</td>
<td>Zahoor Marble</td>
<td>Haji Zahoor Ahmad</td>
<td>Near Watan Mill, W-II, RWP.</td>
</tr>
<tr>
<td>66</td>
<td>Mehria Marble.</td>
<td>Jahanzaib</td>
<td>Near Watan Mill, W-II, RWP.</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>67</td>
<td>B.M Marble</td>
<td>Haji Mushtaq ahmed</td>
<td>Westridge-III, Rawalpindi.</td>
</tr>
<tr>
<td>68</td>
<td>G.R Marble</td>
<td>Zeeshan</td>
<td>Westridge-III, Rawalpindi.</td>
</tr>
<tr>
<td>69</td>
<td>Haq Baho Marble</td>
<td>Malik Shakeel</td>
<td>Range Road, W-III, Rawalpindi.</td>
</tr>
<tr>
<td>70</td>
<td>Habib Chakwal Stone</td>
<td>Habib Ur Rehman</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>71</td>
<td>Peak Marble</td>
<td>Usman</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>72</td>
<td>Shoaib Awan Marble</td>
<td>Arshid Awan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>73</td>
<td>New Umer Marble</td>
<td>Riaz Ahmed</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>74</td>
<td>S.B Marble</td>
<td>Aftab</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>75</td>
<td>Ahtisham Marble</td>
<td>Naseer/Sadiq</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>76</td>
<td>Shahzad Marble</td>
<td>Syed Rahim Shah</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>77</td>
<td>Fasil Marble</td>
<td>Khalid</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>78</td>
<td>Adrees Marble</td>
<td>Ahsan Khan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>79</td>
<td>Al Majeed Marble</td>
<td>Wahid Shah Khattak</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>80</td>
<td>King Stone Marble</td>
<td>Iqbal</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>81</td>
<td>Shafi Ullah Marble &amp; Granite</td>
<td>Shafi Ullah</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>82</td>
<td>Yaseen Marble</td>
<td>Mir Hassan Khan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>83</td>
<td>Qadirya Pak Marble</td>
<td>Javeed Akhtar</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>84</td>
<td>Zyarat white Marble</td>
<td>Waqar ullah</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>85</td>
<td>Moosa Marble</td>
<td>Adnan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>86</td>
<td>Arif Granite</td>
<td>Arif Sultan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>87</td>
<td>A ONE Jamal Marble</td>
<td>Malik Tariq Mehmood</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>88</td>
<td>Pak Parleno</td>
<td>Saeed Khan</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>89</td>
<td>Tarballa Marble</td>
<td>Malik Yasir</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>90</td>
<td>Abdullah Marble.</td>
<td>Abdul Rehman</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>91</td>
<td>Stone house</td>
<td>Shahzad Rafiq</td>
<td>Westridge II Rawalpindi</td>
</tr>
<tr>
<td>92</td>
<td>PAMIR Marble &amp; Granite</td>
<td>Aziz Khan</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>93</td>
<td>Floor Master</td>
<td>Mehboob jahangire</td>
<td>Industerial Ar5ea Chak madad Khan</td>
</tr>
<tr>
<td>94</td>
<td>Al Nazir Marble</td>
<td>Malik Nazir</td>
<td>Industerial Ar5ea Chak madad Khan</td>
</tr>
<tr>
<td>95</td>
<td>Mandi Bahawaldin Marble</td>
<td>Nazir</td>
<td>Industerial Ar5ea Chak madad Khan</td>
</tr>
<tr>
<td>96</td>
<td>Noor Marble</td>
<td>Noor ul Hassan</td>
<td>Industerial Ar5ea Chak madad Khan</td>
</tr>
<tr>
<td>97</td>
<td>Sadiq Marble</td>
<td>Sadiq</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>98</td>
<td>Fazal Marble</td>
<td>Ghulam Hassan</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>99</td>
<td>New Frontier Marble</td>
<td>Iltaf Khan</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>100</td>
<td>Abdul Razaq Marble</td>
<td>Iqbal</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>101</td>
<td>Sahud Marble</td>
<td>Syed ur Rehman</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>102</td>
<td>Umar Granite Marble</td>
<td>Jamshid</td>
<td>Westridge IIIRawalpindi</td>
</tr>
<tr>
<td>104</td>
<td>Ghulam Mustafa Gohar Marble</td>
<td>Zahoor Ahmed</td>
<td>I J P Road Rawalpindi</td>
</tr>
<tr>
<td>105</td>
<td>Haji Ali Marble</td>
<td>Khushal</td>
<td>Westridge IIIRawalpindi</td>
</tr>
<tr>
<td>106</td>
<td>Satti Marble</td>
<td>Safir Satti</td>
<td>Westridge IIIRawalpindi</td>
</tr>
<tr>
<td>107</td>
<td>Mosa Marble</td>
<td>Ansar Khan</td>
<td>Westridge IIIRawalpindi</td>
</tr>
<tr>
<td>108</td>
<td>Abdullah Marble.</td>
<td>Abdul kream</td>
<td>Westridge IIRawalpindi</td>
</tr>
<tr>
<td>109</td>
<td>Waheed Marble Factory</td>
<td>Abdul Waheed</td>
<td>Main Idyala road near Shah pur stop Rawalpindi</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>110</td>
<td>Laiq Marble</td>
<td>Muhammad Nawaz</td>
<td>IJP Road, Rawalpindi</td>
</tr>
<tr>
<td>111</td>
<td>IQRA Marble</td>
<td>Muhammad Gul Khattak</td>
<td>Railway Road, Westrigde II, Rawalpindi</td>
</tr>
<tr>
<td>112</td>
<td>Ghausia Marble</td>
<td>Amir Shahzad</td>
<td>Railway Road, Westrigde II, Rawalpindi</td>
</tr>
<tr>
<td>113</td>
<td>Al Madina Marble</td>
<td></td>
<td>Railway Road, Westrigde II, Rawalpindi</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>GUJJAR KHAN</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>1</th>
<th>Awais Granite Marble Factory</th>
<th>Mian Muhammad Akram (34101-2683682-9)</th>
<th>Bilmuqabil Cricket Stadium, G.T Road Gujjar Khan</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>KARACHI</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th></th>
<th>Name of Company</th>
<th>Name of Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Cinopak Resourses (Pvt.) Limited</td>
<td>Nadeem Khan Shehanshahi (42501-6125169-1)</td>
<td>D-27/1, Block-5, Kehkashan, Clifton, Karachi</td>
</tr>
<tr>
<td>2</td>
<td>R.Z.Marble Industries</td>
<td>Niyaz-Ul-Amin</td>
<td>Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>3</td>
<td>Memon Marble</td>
<td>M. Khurram Ibrahim</td>
<td>109- BL-2 Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>4</td>
<td>Mujahid Marble</td>
<td>Mr.syed Mujahid Nabi</td>
<td>D-37-&amp; 13 Manghopir Road KHI.</td>
</tr>
<tr>
<td>5</td>
<td>F.G.Marble</td>
<td>Farman Ali &amp; Noor Hassan</td>
<td>NC 1, Nusrat Bhutto Colony,Karachi.</td>
</tr>
<tr>
<td>6</td>
<td>SHAH MARBLE</td>
<td>Ameen Memon</td>
<td>R-20 4th Floor trood,karachi.</td>
</tr>
<tr>
<td>7</td>
<td>Ali’s Marble</td>
<td>Mr.Syed zeeshan Ali</td>
<td>16 St-6-Bl-1 Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>8</td>
<td>Kashmir Enterprises</td>
<td>Sharif Kashmiri Mobasil</td>
<td>Plot No 53, Metroville manghopir Road Karachi.</td>
</tr>
<tr>
<td>9</td>
<td>Noor Marble.</td>
<td>Shamim Bhai</td>
<td>N C 1, Deh Manghopir Road, Karachi.</td>
</tr>
<tr>
<td>10</td>
<td>Marble Craft International</td>
<td>Adnan Masoom</td>
<td>Plot Nc 31 Deh Metroville manghopir Road Karachi.</td>
</tr>
<tr>
<td>11</td>
<td>Ghazi Marble</td>
<td>Umar &amp; Shahzad</td>
<td>Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>12</td>
<td>Supreme Marble</td>
<td>Mr.Muhmmad Aqeel</td>
<td>NC 31, Nusrat Bhutto Colony, Pump M P Road,Karachi.</td>
</tr>
<tr>
<td>13</td>
<td>Faizan Marble</td>
<td>Adnan Rafiq Ahmed</td>
<td>Qasba 5/5 Metroville Manghopir Road Khi.</td>
</tr>
<tr>
<td>14</td>
<td>Al Mustafa Marble</td>
<td>Mr.Nawab Uddin</td>
<td>1-D-1 Sec-5 Qasba Metroville Manghopir Road Khi</td>
</tr>
<tr>
<td>15</td>
<td>Saudagar Marble Industry</td>
<td>Mr.Muhammad Iqbal</td>
<td>Nc-1 Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>16</td>
<td>Marble Centre</td>
<td>Mr. sohail</td>
<td>3 Manghopir Road Karachi PECH Karachi.</td>
</tr>
<tr>
<td>17</td>
<td>Macca Madina Marble Industry</td>
<td>Zahid Akram</td>
<td>24/3 Block 2, Qazba Metroville, Manghopir Road,Karachi</td>
</tr>
<tr>
<td>18</td>
<td>Tak International</td>
<td>Mr.Abdul Mateen</td>
<td>R-210 Ctr I.i chundrigar Rd Khi</td>
</tr>
<tr>
<td>19</td>
<td>A.b. Marble Ind</td>
<td>Inyat Ali &amp; Bilal</td>
<td>NC 1 Deh Mangho Pir Road</td>
</tr>
<tr>
<td>20</td>
<td>Tanveer Marble</td>
<td>Tanveer</td>
<td>Plot 66 st 6/6 Manghopir Road Khi</td>
</tr>
<tr>
<td>21</td>
<td>Five star Marble</td>
<td>Mr.Mehtab Alam Bhatti</td>
<td>1-C-6 Sec 5/5 Qasba Metroville Manghopir Road Khi</td>
</tr>
<tr>
<td>22</td>
<td>Modern Marble</td>
<td>MR.Arshad</td>
<td>1-D 24 Qasba Meroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>23</td>
<td>M.F.Marble</td>
<td>Afzal</td>
<td>Amin Abad Ind Manghopir Road, Karachi.</td>
</tr>
<tr>
<td>24</td>
<td>New Hamza Marble</td>
<td>Kashif</td>
<td>1-D, Qasba Metroville Manghopir Road Khi</td>
</tr>
<tr>
<td>25</td>
<td>Saeed Khan Amazai Marble</td>
<td>Saeed Khan</td>
<td>NC-1, Qasba Manghopir Road, Karachi.</td>
</tr>
<tr>
<td>26</td>
<td>Kashmir Marble</td>
<td>Pervaiz Iqbal</td>
<td>St 150-151-154 Deh Manghopir Road, Karachi</td>
</tr>
<tr>
<td>27</td>
<td>Kingdom Internat-national</td>
<td>MR.M. Farhan Afzal</td>
<td>Nc 26 Deh Manghopir Nusrat Bhutto Cly Khi</td>
</tr>
<tr>
<td>28</td>
<td>Malti Marble</td>
<td>Raiz</td>
<td>NC 31, Nusrat Bhutto Colony, Karachi.</td>
</tr>
<tr>
<td>29</td>
<td>Yousuf Marble</td>
<td>Mr Yousuf</td>
<td>Plot 112 New Mianwali Cly Sec 1-c MP RD Khi</td>
</tr>
<tr>
<td>30</td>
<td>Right Marble</td>
<td>Mr. M. Arif Ansari</td>
<td>Nc-1 Qasba Metroville Manghopir rd Khi</td>
</tr>
<tr>
<td>31</td>
<td>Dilawar Marble</td>
<td>Dilawar</td>
<td>Pak Colony Manghopir Road</td>
</tr>
<tr>
<td>32</td>
<td>Nabeel Marble</td>
<td>Mr.Muhammad Younis</td>
<td>NC-31/B Nusrat Bhutto Colony, M.P Road,Karachi</td>
</tr>
<tr>
<td>33</td>
<td>Ghani Marble</td>
<td>Asghar &amp; Rasheed Khan</td>
<td>Ct-3 Qasba Metroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>34</td>
<td>Union Marble</td>
<td>Mudasir Ali</td>
<td>5 Mian Wali Colony Qasba Metrovill M.P Road Karachi</td>
</tr>
<tr>
<td>35</td>
<td>Khwaja Mable</td>
<td>Khwaja Abdul Aziz Ghouri</td>
<td>D-1-38 Bl-7 Gulshan -e- Iqbal KHI</td>
</tr>
<tr>
<td>36</td>
<td>Paramount Marble</td>
<td>Niyaz &amp; Yousuf</td>
<td>1 C Qasba 5/5 Manghopire Road, Karachi.</td>
</tr>
<tr>
<td>37</td>
<td>Empire Art</td>
<td>Sarwar</td>
<td>St-6-Bl-1,Qasba Metroville Manghopir Road Karachi.</td>
</tr>
<tr>
<td>38</td>
<td>Sayyada Marble</td>
<td>Faisal Wasi Ansari</td>
<td>A 49-50, Hasrat Mohani Colony Manghopir Road Near Noorani Masjid Road KHI</td>
</tr>
<tr>
<td>39</td>
<td>Circle One</td>
<td>Syed Qadir&amp;Qadeer</td>
<td>Mezzanine floor ,4- c, Lane-10 bukhari commercial phase-4 DHA, Karachi</td>
</tr>
<tr>
<td>40</td>
<td>Osaf Marble Ind</td>
<td>Fayyaz Ahmed Shoaib</td>
<td>NC 1 Deh Manghopir Road Karachi</td>
</tr>
<tr>
<td>41</td>
<td>Pir Lal Shah Marble</td>
<td>Haji Jamil Khan Afridi</td>
<td>Ameenabad industry Manghopir Road Karachi</td>
</tr>
<tr>
<td>42</td>
<td>Marble &amp; Marble</td>
<td>Sadiq Khan</td>
<td></td>
</tr>
<tr>
<td>43</td>
<td>Gulab Marble</td>
<td>Gulab Khan</td>
<td>D- Ameena bad Manghopir Rd Khi</td>
</tr>
<tr>
<td>44</td>
<td>Design Corner</td>
<td>Haroon</td>
<td>Plot Nc 7 Qasba Metrovill</td>
</tr>
<tr>
<td>45</td>
<td>Tayyab Marble</td>
<td>S Tayyab Ahmed</td>
<td>D-37-&amp; 13 Manghopir Road Metroville M.P Rd Khi</td>
</tr>
<tr>
<td>46</td>
<td>A K Marble</td>
<td>Mr.Syed Asif Hussain</td>
<td>1-9/1 Shop-1 Opp Shell Petrol Pump M P Rd Khi</td>
</tr>
<tr>
<td>47</td>
<td>Bobby Eximp</td>
<td>Babur Habib</td>
<td>p-9modern colony Manghopir Road Metroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>48</td>
<td>Marble and Marble</td>
<td>Sadiq Khan</td>
<td>Nc-1 Qasba Metroville Manghopir rd Khi</td>
</tr>
<tr>
<td>49</td>
<td>Zakariya Marble</td>
<td>Ashfaq</td>
<td>NC 31 Nusrat Bhutto Colony Pump, metroville Manghopir Road khi</td>
</tr>
<tr>
<td>50</td>
<td>Prime Marble Products</td>
<td>Mr.GHULAM Qadir</td>
<td>1-C-12 sec-5/5 Qasba metroville Manghopir Road khi</td>
</tr>
<tr>
<td>51</td>
<td>Kainat Enterprises</td>
<td>Nishad Muhammad</td>
<td>House no.111 sec 01 Pakhtunabad Karachi</td>
</tr>
<tr>
<td>52</td>
<td>Khan Marble</td>
<td>Qayyum Khatak</td>
<td>Manghopir road opposite Police station Karachi</td>
</tr>
<tr>
<td>53</td>
<td>City Marble</td>
<td>DalI ur Rehman</td>
<td>Manghopir road new miyawali site Karachi</td>
</tr>
<tr>
<td>54</td>
<td>Qaisar Marble</td>
<td>Qaisar Khan</td>
<td>Deh manghopir road Karachi</td>
</tr>
<tr>
<td>55</td>
<td>Insaf Marble</td>
<td>Wahab Gul</td>
<td>men manghopir road</td>
</tr>
<tr>
<td>56</td>
<td>Wali Safi</td>
<td>Abdul Muhammad/Said ur Rehman</td>
<td>Deh manghopir road Karachi</td>
</tr>
<tr>
<td>57</td>
<td>Al Falah Marble</td>
<td>Durrani Khan</td>
<td>nc 1 Deh manghopir road Karachi</td>
</tr>
<tr>
<td>58</td>
<td>Desent Marble</td>
<td>M.Rehman/Ashiq</td>
<td>Deh manghopir road Karachi</td>
</tr>
<tr>
<td>59</td>
<td>Swat Marble</td>
<td>Ummat Shah</td>
<td>plot no 1-c/80 st,5/5 Manghopir road Karachi</td>
</tr>
<tr>
<td>60</td>
<td>Sony Dharti Marble</td>
<td>Taibzar</td>
<td>plot no 1-c, st,5/5 Manghopir road Karachi</td>
</tr>
<tr>
<td>NEW MEMBERS</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Rahim Marble</td>
<td>Najmul Hasan</td>
<td>2 &amp; 3, St 6/1 Manghopir road Karachi</td>
</tr>
<tr>
<td>2</td>
<td>Faiza-e-Madina Marble</td>
<td>Mohhammed Tayyab</td>
<td>Qasba Metrovill M.P Road KARACHI</td>
</tr>
<tr>
<td>3</td>
<td>Pakistan Marble</td>
<td>Mohammed Akram</td>
<td>plot 1, st 1 Sector I sultanabad</td>
</tr>
<tr>
<td>4</td>
<td>Karachi Marble</td>
<td>Alam Khan</td>
<td>Nc 31/3 Manghopir road Karachi</td>
</tr>
<tr>
<td>5</td>
<td>Usman Marble</td>
<td>Mohammed Anwar</td>
<td>Survay 151, 152, 154 Manghopir road Karachi</td>
</tr>
<tr>
<td>6</td>
<td>Iqbal &amp; Sons Marble</td>
<td>Mohammed Iqbal</td>
<td>Plot 1c 80, section 5/g Manghopir road Karachi</td>
</tr>
<tr>
<td>7</td>
<td>Kushal Marble</td>
<td>Mohammed Ayub</td>
<td>NC 31 Nusrat Bhutto Colony Manghopir Rd KARACHI</td>
</tr>
<tr>
<td>8</td>
<td>Irfan Polish</td>
<td>Mohammed Irfan</td>
<td>Kesc 115 Manghopir road Karachi</td>
</tr>
<tr>
<td>9</td>
<td>Fameeda Marble</td>
<td>Aftab Ahmed</td>
<td>1-D-7/8 Manghopir road Karachi</td>
</tr>
<tr>
<td>10</td>
<td>Zenith Marble Industry</td>
<td>Shakil Ahmed</td>
<td>Plot 1d 05, Block B Manghopir road Karachi</td>
</tr>
<tr>
<td>11</td>
<td>Usman Marble</td>
<td>Saeed Ullah</td>
<td>Plot C 1 A/62 st 6/1, Manghopir road Karachi</td>
</tr>
<tr>
<td>12</td>
<td>Itfaiq Marble</td>
<td>Muhammad Tameem</td>
<td>NC 31 Manghopir road Karachi</td>
</tr>
<tr>
<td>13</td>
<td>Buner Marble (Sent Before)</td>
<td>Taj Ameen Khan</td>
<td>Plot 08 B, NC 01 Manghopir road Karachi</td>
</tr>
<tr>
<td>14</td>
<td>Tariq Aziz Marble</td>
<td>Bakht Afsar</td>
<td>NC 31 Manghopir road Karachi</td>
</tr>
<tr>
<td>15</td>
<td>Jablae Noor Marble</td>
<td>Ayaz Khan</td>
<td>NC 31 Manghopir road Karachi</td>
</tr>
<tr>
<td>16</td>
<td>Al Noor Marble</td>
<td>Wahid Khan</td>
<td>Kesc 95 plot 06, Islamaia Colony</td>
</tr>
<tr>
<td>17</td>
<td>S.M Marble</td>
<td>Musharaf Khan</td>
<td>1d 3st 1 G Block A Manghopir road Karachi</td>
</tr>
<tr>
<td>18</td>
<td>Swat Marble</td>
<td>Zard Ullah</td>
<td>Mangopir Road Karachi</td>
</tr>
<tr>
<td>19</td>
<td>Hashmi Marble</td>
<td>Nawab Khan</td>
<td>Plot C1, A 32 Manghopir road Karachi</td>
</tr>
<tr>
<td>20</td>
<td>Ameen Marble Industries</td>
<td>Bakht Ameen</td>
<td>Plot 07 Deh Orangi M.P Road Karachi</td>
</tr>
<tr>
<td>21</td>
<td>Marble International 2</td>
<td>Noor Ul Islam</td>
<td>plot 1 d st 14 sector 5 Manghopir road Karachi</td>
</tr>
<tr>
<td>22</td>
<td>Shahzad Marblr Industries</td>
<td>Qaid Khan / Sami Ullah</td>
<td>st 6 block 1 Manghopir road Karachi</td>
</tr>
<tr>
<td>23</td>
<td>M.M Marble</td>
<td>Behra Mand</td>
<td>plot 109 st 189 Manghopir road Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Geo Marble</td>
<td>Jamil Akhtar</td>
<td>Plot NC 31 Manghopir road Karachi</td>
</tr>
<tr>
<td>25</td>
<td>Qadri Marble</td>
<td>jamil Akhtar</td>
<td>NC 1A NC 31 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>26</td>
<td>Gul Marble</td>
<td>Muhammad Daud</td>
<td>Noc to A/1 Manghopir road Karachi</td>
</tr>
<tr>
<td>27</td>
<td>Three Star Marble</td>
<td>Gul Marjan</td>
<td>Plot C-2151-5-5 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>28</td>
<td>Hashmi Marble</td>
<td>Muhammad Sharif</td>
<td>Plot 1C Sector 5/5 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>29</td>
<td>New Three Star Marble</td>
<td>Farooq Khan</td>
<td>Plot A 4 NC 01, Metrovill, Manghopir road Karachi</td>
</tr>
<tr>
<td>30</td>
<td>Master Marble Industry</td>
<td>Tariq Yaseen</td>
<td>Plot A 9 Block 05 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>31</td>
<td>Al Syeed Marble</td>
<td>Saha Zada Noor Ul Islam</td>
<td>Plot NK 31 m26 Manghopir road Karachi</td>
</tr>
<tr>
<td>32</td>
<td>Al Hamd Marble</td>
<td>Muhammad Darwash Khan</td>
<td>Plot C89 Block 5 Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>33</td>
<td>Rehan Marble</td>
<td>Akhtar Janan</td>
<td>Plot 177 Qasba Metrovill Aurangi</td>
</tr>
<tr>
<td>34</td>
<td>Mohsin Marble</td>
<td>Saeed Marjan</td>
<td>Plot 26 Manghopir road Karachi</td>
</tr>
<tr>
<td>35</td>
<td>Sahabzada Marble</td>
<td>Shamsul Islam</td>
<td>Plot 2 NC 1 Manghopir road Karachi 21-c</td>
</tr>
<tr>
<td>36</td>
<td>Umair Marble</td>
<td>Muhammad Umair</td>
<td>Plot 8 Qasba Metrovill Manghopir road Karachi</td>
</tr>
<tr>
<td>37</td>
<td>Zarwali Marble</td>
<td>Ilyas Khan</td>
<td>Plot 31/3A Manghopir road Karachi</td>
</tr>
<tr>
<td>38</td>
<td>N.S Marble</td>
<td>Inam Uddin</td>
<td>Plot D-43 Survay 30 ameenabad</td>
</tr>
<tr>
<td>39</td>
<td>Buland Khan Marble</td>
<td>Haji Buland Khan</td>
<td>D-37 Ameenabad Qasba Metrovill</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th>RAWAT</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S #</th>
<th>Name of Company</th>
<th>Name of Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Zeeshan Marble &amp; Granite Factory</td>
<td>Mukaram Shah</td>
<td>T Chowk Main G T Road Rawat Islamabad</td>
</tr>
<tr>
<td>2</td>
<td>Shan Marble &amp; Granite</td>
<td>Asif Mehmood</td>
<td>Dhoke Awan Opp DHA II, Gate 1 Main G.T Road Rawat Islamabad</td>
</tr>
<tr>
<td>3</td>
<td>Botiseena House</td>
<td>Muhammad Ijaz</td>
<td>T Chowk Main G T Road Rawat Islamabad</td>
</tr>
<tr>
<td>4</td>
<td>Royal Marble</td>
<td>Saleem Iqbal</td>
<td>Haji Wali Plaza Opp DHA Phase II Main G.T Road Rawat</td>
</tr>
<tr>
<td>5</td>
<td>Insaf Marble</td>
<td>Riaz Ali / Muhammad Arif</td>
<td>T Chowk Rawat Islamabad</td>
</tr>
<tr>
<td>6</td>
<td>New Bunair Marble Show Room</td>
<td>Syed Zahoor Bacha</td>
<td>Main G.T.Road, Rawat, T-Chowk, Islamabad</td>
</tr>
<tr>
<td>7</td>
<td>Al Karam Marble</td>
<td>Naveed Altaf</td>
<td>T Chowk Main G T Road Rawat Islamabad</td>
</tr>
<tr>
<td>8</td>
<td>Baba Marble &amp; Granite</td>
<td>Saqib Mehmood</td>
<td>Opp,DHA Gate # 1, Phase II, G.T Road Rawat</td>
</tr>
<tr>
<td>9</td>
<td>Shahid Khan Afridi Marble</td>
<td>Zohaib Khan</td>
<td>T Chowk Main G T Road Rawat Islamabad</td>
</tr>
<tr>
<td>10</td>
<td>Ayesha Marble &amp; Granite</td>
<td>Nasir Mehmood Kiyani</td>
<td>Opp DHA Phase II Gate # 1, Main G.T.Road, Islamabad</td>
</tr>
<tr>
<td>12</td>
<td>Choudhary Marble &amp; Granite</td>
<td>Choudhary Babar Rasheed</td>
<td>Opp Tool Plaza Near T Chowk Rawat</td>
</tr>
<tr>
<td>13</td>
<td>Manzar Marble</td>
<td>Malik Manzar Ayyaz</td>
<td>T Chowk Main G. T Road Rawat Islamabad</td>
</tr>
<tr>
<td>14</td>
<td>Hamalia Marbles</td>
<td>Fazal e Rabi</td>
<td>Main G T Road, Near T- Chowk Rawat Islamabad</td>
</tr>
<tr>
<td>15</td>
<td>Fine Stone Marble &amp; Granite</td>
<td>Abid Ur Rehman</td>
<td>Opp DHA II Gate # 1 Dhoki Awan Stop Rawat Islamabad</td>
</tr>
<tr>
<td>16</td>
<td>Mehria Marble Factory</td>
<td>Mehboob Khan</td>
<td>Near DHA, Phase-2,opp chaudry plaza Main G-T Road Rawalpindi.</td>
</tr>
<tr>
<td>17</td>
<td>Nabeel Marble</td>
<td>Rizwan Ali</td>
<td>DHA Office opp.D.H.A Gate#1 phase 2 G.T Road,Rawat.</td>
</tr>
<tr>
<td>18</td>
<td>Gul Marble</td>
<td>Faisal Hassan</td>
<td>T Chowk Main G. T Road Rawat Islamabad</td>
</tr>
<tr>
<td>19</td>
<td>Bismillah Marble</td>
<td>Choudary basharat</td>
<td>Bilmuqabal shell petrol pump bhangral road Rawat</td>
</tr>
<tr>
<td>20</td>
<td>Stone Craft</td>
<td>Muhammad Nouman Aziz</td>
<td>Bhatti market Opp.yusra medical College DHA 2 G.T Road Islamabad.</td>
</tr>
<tr>
<td>21</td>
<td>Bakhtawar Marble Hardware</td>
<td>Kaleem Ullah</td>
<td>Shop # 5, Near T. Chowk Dhamial Markete Opp Alied bank Rawat Isb</td>
</tr>
<tr>
<td>24</td>
<td>Pak Paris Marble</td>
<td>Arshad Mehmood</td>
<td>Main G.T.Road, Rawat, Islamabad</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>TAXILA</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Huzaifa Marble &amp; Granite</td>
<td>Umair Sajjad</td>
<td>Plot#26-A Small Industrial Estate(wahcantt)TAXILA</td>
</tr>
<tr>
<td>2</td>
<td>Top Stone Granite Processing</td>
<td>Muhammad Zafar Hayat</td>
<td>Plot#B-55 Punjab small Industries,Taxilla Wah Cantt</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>BALOCHISTAN</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Yasir Marble Processing &amp; Mining 56302-8107730-3</td>
<td>Sardar Yasir Jogezai</td>
<td>Jogezai Plaza, Tehsil Road, Loralai Balochistan Quetta</td>
</tr>
<tr>
<td>2</td>
<td>T J Marble 56302-0831673-1</td>
<td>S.S Hayat Khan Jogezai</td>
<td>Loralai Blochistan</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th>KHARIAN</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Makka Marble Factory</td>
<td>Usman Afzal</td>
<td>Samarala Post Office, Samarala, Tehsil Kharian, Gujrat</td>
</tr>
<tr>
<td>2</td>
<td>Yaqoob Marble Factory</td>
<td>Yaqoob Ahmeed</td>
<td>Chock Rasheedabad khanewal road Multan</td>
</tr>
<tr>
<td>3</td>
<td>Super Marble</td>
<td>Manzoor Ahmed</td>
<td>Beowali Jalalpur jattan road Gujrat</td>
</tr>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>JHELUM</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>1</th>
<th>Qazi Marble</th>
<th>Qazi Habib ur Rehman</th>
<th>Small Industrial Estate, Rathian, Jhelum</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th><strong>FAISALABAD</strong></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<table>
<thead>
<tr>
<th>S #</th>
<th>Name of Company</th>
<th>Name OF Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Super Kohsar Marble</td>
<td>Imran Ahmad</td>
<td>Sheikupura Road Hajiabad Faisalabad</td>
</tr>
<tr>
<td>2</td>
<td>Lyallpur Marble</td>
<td>Ali Asghar sb</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>3</td>
<td>Subhan Marble</td>
<td>Yasir sb</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>4</td>
<td>FAIZAN-E-MADINA MARBLES</td>
<td>M. faizan sb</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>5</td>
<td>SAFI MARBLE</td>
<td>Ali Akbar</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>6</td>
<td>AL-HAMMAD MARBLE</td>
<td>Faisal Saleem</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>7</td>
<td>NEW MIAN MARBLES</td>
<td>Faisal Zaman</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>8</td>
<td>HARIS MARBLE</td>
<td>Arshed sb</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>9</td>
<td>MUSLIM MARBLES</td>
<td>Muneer ahmad</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>10</td>
<td>MASHA ALLAH MARBLE</td>
<td>Zahid Sb</td>
<td>Nader Town, Faisalabad</td>
</tr>
<tr>
<td>11</td>
<td>MUBARAK MARBLE FACTORY</td>
<td>Sarfaraz Mubarak</td>
<td>Bakar Mandi Road, Faisalabad</td>
</tr>
<tr>
<td>12</td>
<td>Super Mian Mables</td>
<td>Habib Ullah</td>
<td>Khurrianwala,Faisalabad</td>
</tr>
<tr>
<td>13</td>
<td>Nabeel Marble</td>
<td>Khalida Begum</td>
<td>Santsingh Road</td>
</tr>
<tr>
<td>14</td>
<td>Marhaba Marble &amp; Granite Tiles</td>
<td>Perveen Akhtar</td>
<td>Sheikhupura Road, Nishatabad, Faisalabad</td>
</tr>
<tr>
<td>15</td>
<td>Mian Marble</td>
<td>M. Ramzan</td>
<td>Susan Road</td>
</tr>
<tr>
<td>16</td>
<td>Kohistan Marble</td>
<td>Razaq sb</td>
<td>Bakar Mandi Road</td>
</tr>
<tr>
<td>17</td>
<td>Pak Marble</td>
<td>Mirza Saeed sb.</td>
<td>Ghatt Wala</td>
</tr>
<tr>
<td>18</td>
<td>Tawakal Marbles</td>
<td>Obaid Ullah</td>
<td>4 chak Road</td>
</tr>
<tr>
<td>19</td>
<td>Qamar Ishaq Marble</td>
<td>Ishaq sb</td>
<td>Jaranwala Road</td>
</tr>
<tr>
<td>20</td>
<td>Green Granite Marble</td>
<td>Tahir Muneer sb.</td>
<td>Susan Road</td>
</tr>
<tr>
<td>21</td>
<td>Faizan Marble Factory</td>
<td>Khurram Mushtaq</td>
<td>Santsingh Road</td>
</tr>
<tr>
<td>22</td>
<td>National Marble</td>
<td>SADDIQUE ASLAM</td>
<td>Susan Road</td>
</tr>
<tr>
<td>23</td>
<td>New Mian Marble &amp; Granite</td>
<td>M. Haneef Ullah</td>
<td>Satyana Road.</td>
</tr>
<tr>
<td>24</td>
<td>City Marbles</td>
<td>M. Yasin Naseem</td>
<td>204 Chk</td>
</tr>
<tr>
<td>25</td>
<td>Shaukat Marble</td>
<td>Sarfaraz Ali</td>
<td></td>
</tr>
<tr>
<td>26</td>
<td>Afzal Marble</td>
<td>Muhammad Awais</td>
<td>Sheikhupura Road, Faisalabad</td>
</tr>
</tbody>
</table>
<p><strong>SARGODHA</strong></p>
<table>
<thead>
<tr>
<th>S #</th>
<th>Name of Company</th>
<th>Name of Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Awan Marble</td>
<td>Azmat Ali Khan (38403-2175751-5)</td>
<td>General Bus Stand Road Sargodha</td>
</tr>
<tr>
<td>2</td>
<td>Liaqat Marble</td>
<td>Malik Liaqat (38403-2247373-1)</td>
<td>General Bus Stand Road Sargodha</td>
</tr>
<tr>
<td>3</td>
<td>Malik Marbles</td>
<td>Muhmammad Sher (38403-2086202-1)</td>
<td>General Bus Stand Road Sargodha</td>
</tr>
<tr>
<td><strong>GUJRANWALA</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>New Nadeem Marble</td>
<td>Gulzar Ahmed</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>2</td>
<td>Iqbal Marble</td>
<td>M.Khalid Rasheed</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>3</td>
<td>Jaddah Marble</td>
<td>Muhammad Ibrahim</td>
<td>New Bilal Bajwa Road,Gujranwala.</td>
</tr>
<tr>
<td>4</td>
<td>Taham Marble</td>
<td>Faisal Ismail Malik</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>5</td>
<td>Chaudhry Marble</td>
<td>Muhammad Shifa</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>6</td>
<td>Munawar Enterprises</td>
<td>M. Shoaib Munawar</td>
<td>Bajwa Road, Gujranwala</td>
</tr>
<tr>
<td>7</td>
<td>Ismail Marble</td>
<td>Tanveer Ahmed</td>
<td>Khiyali By Pass, Gujranwala.</td>
</tr>
<tr>
<td>8</td>
<td>Al Haram Marble</td>
<td>Masood Anwar</td>
<td>Khiyali By Pass, Gujranwala.</td>
</tr>
<tr>
<td>9</td>
<td>NAGINA MARBLE</td>
<td>M.USMAN TARIQ</td>
<td>Bajwa Road, Gujranwala</td>
</tr>
<tr>
<td>10</td>
<td>NAFEES MARBLE</td>
<td>MUHAMMAD NAFEES</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>11</td>
<td>PAKISTAN MARBLE</td>
<td>MUHAMMAD RIAZ</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>12</td>
<td>Al Khair Marble Industry</td>
<td>Abdul Qadir Kambooh</td>
<td>Mandiala Road Gujranwala</td>
</tr>
<tr>
<td>13</td>
<td>Makkah Marble</td>
<td>Shafqat Iqbal</td>
<td>33-A, S.I.E-2, Gujranwala .</td>
</tr>
<tr>
<td>14</td>
<td>Sadiq Marble</td>
<td>SAJAD HUSSAIN TARRAR</td>
<td>39-42 A, S.I.E-2, Gujranwala .</td>
</tr>
<tr>
<td>15</td>
<td>R.S Traders</td>
<td>Rehan Ahmed</td>
<td>Gondla Wala Road, Gujranwala .</td>
</tr>
<tr>
<td>16</td>
<td>ALVI &amp; BROTHERS</td>
<td>GHULAM QASIM ALVI</td>
<td>JINAH ROAD, GUJRANWALA.</td>
</tr>
<tr>
<td>17</td>
<td>AFZAL MARBLE</td>
<td>M. NAWAZ MUGHAL</td>
<td>House # 260, Jalil Town, Gujranwala</td>
</tr>
<tr>
<td>19</td>
<td>RAB TawakaL MARBLE</td>
<td>MUHAMMAD YOUNAS</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>20</td>
<td>PRIME MARBLE</td>
<td>MALIK IRFAN AHMED</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>21</td>
<td>KHALID MARBLE INDUSTRY</td>
<td>Khalid Javeed</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>22</td>
<td>MASHALLAH MARBLE</td>
<td>AHMED RAZA Sheikh</td>
<td>UPPER KINAL, NAZD KANGNI WALA, GUJRANWALA.</td>
</tr>
<tr>
<td>24</td>
<td>AL-SYEDDAIN MARBLE</td>
<td>SYED MUHAMMAD TAHIR</td>
<td>GUJRANWALA CANT, OPP. DC COLONY, GUJRANWALA.</td>
</tr>
<tr>
<td>25</td>
<td>NATURAL MARBLE INDUSTRY</td>
<td>ZEESHAN AZAM</td>
<td>SHEIKHUPURA ROAD, GUJRANWALA.</td>
</tr>
<tr>
<td>26</td>
<td>NOMAN MARBLE</td>
<td>FOZIA ASGHAR / M ASGHER</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>27</td>
<td>JAPAN MARBLE</td>
<td>MUHAMMAD SALEEM</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>28</td>
<td>Master Marble</td>
<td>M.Yasin</td>
<td>Khiali Bypass Estate 2 Gujranwala</td>
</tr>
<tr>
<td>29</td>
<td>New Bilal Marble Industry</td>
<td>Salman Anwar</td>
<td>New Bilal Bajwa G.T Road</td>
</tr>
<tr>
<td>30</td>
<td>Huzaifa Marble</td>
<td>M. Ikram</td>
<td>Khiali Bypass Estate 2 Gujranwala</td>
</tr>
<tr>
<td>31</td>
<td>Unique Marble Industry.</td>
<td>M. Abdullah</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
<tr>
<td>32</td>
<td>New Star Marble &amp; Granite</td>
<td>Omair Amin Rana</td>
<td>Bajwa Road, Gujranwala</td>
</tr>
<tr>
<td>32</td>
<td>Ideal Marble</td>
<td>Ali Raza</td>
<td>SIALKOT ROAD, WAZIRABAD, GUJRANWALA..</td>
</tr>
<tr>
<td>33</td>
<td>Shalimar Marble Industry</td>
<td>Muhammad Anwar</td>
<td>Chan-da-Qila, Near Kothi Babu Javed, Gujranwala</td>
</tr>
<tr>
<td>34</td>
<td>Punjab Marble Industry</td>
<td>ZEENAT AMIN</td>
<td>GAP Chowk, Gujranwala</td>
</tr>
<tr>
<td>35</td>
<td>Falak Marble</td>
<td>Qaiser Nawaz</td>
<td>House # 260-A. Jalil Town, Gujranwala</td>
</tr>
<tr>
<td>36</td>
<td>Shalimar Granite</td>
<td>Bushra Begam</td>
<td>Chan-da-Qila, Judicial Colony, Gujranwala</td>
</tr>
<tr>
<td>37</td>
<td>Al-Noor Marble Industry</td>
<td>SAEED ARIF</td>
<td>Bajwa Road, Gujranwala</td>
</tr>
<tr>
<td>38</td>
<td>SHAKEEL MARBLE</td>
<td>SHAKEEL ISMAEEL</td>
<td>Bajwa Road, Gujranwala.</td>
</tr>
</tbody>
</table>
<p><strong>LAHORE</strong></p>
<table>
<thead>
<tr>
<th>S #</th>
<th>Name of Company</th>
<th>Name of Owner</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Khawar Marble.</td>
<td>Mirza M. Khawar.</td>
<td>186-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>2</td>
<td>Aslam Marble &amp; Granite.</td>
<td>Shiekh Muhammad Aslam</td>
<td>188-D,Immam Bargah St,Ichra,-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>3</td>
<td>Rizwan Marble</td>
<td>M. Shafiq</td>
<td>186-A,Immam Bargah St,Ichra,-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>4</td>
<td>Nishat Marble</td>
<td>Nadeem Aslam</td>
<td>186-Ferozepur Road, Lahore</td>
</tr>
<tr>
<td>5</td>
<td>Ishaq Marble Industry (35202-1597518-1)</td>
<td>Asim Ishaq Bhatti</td>
<td>Waseem Sajjad Road Khori, Muridke</td>
</tr>
<tr>
<td>6</td>
<td>Ittefaq Building Metrerial Stone</td>
<td>Mumtaz Faiz Ellahi</td>
<td>200-A, Ferozepur Road Glaxy Cinema, Lahore.</td>
</tr>
<tr>
<td>7</td>
<td>Ayesha Marble Factory.</td>
<td>Ch. Imran Kilo</td>
<td>173/D, Ghazi Road, Defence, Lahore.</td>
</tr>
<tr>
<td>8</td>
<td>Al Asal Marble &amp; Granite</td>
<td>Khalid Mehmood Ahmed</td>
<td>Defence Ghazi Road Near Miraj Flour Mill Cant Lahore</td>
</tr>
<tr>
<td>9</td>
<td>Waseem Marble.</td>
<td>Aga Waseem Masood</td>
<td>186-Ferozepur Road,Lahore.</td>
</tr>
<tr>
<td>10</td>
<td>Sheraz Marble.</td>
<td>Haji Abdul Razzaq.</td>
<td>186-Ferozepur Road,Lahore.</td>
</tr>
<tr>
<td>11</td>
<td>Amjad Marble Center</td>
<td>M. Amjad.</td>
<td>186-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>12</td>
<td>Al Basit Marbles</td>
<td>Javed Iqbal.</td>
<td>3-KM, Canal Bank Road Opp Muhafaz Town Lahore</td>
</tr>
<tr>
<td>13</td>
<td>Al Badar Marbles</td>
<td>Ubaid-ur-Rehman</td>
<td>188-Ferozpur Road,Quaid-e-Azam Marble.</td>
</tr>
<tr>
<td>14</td>
<td>Farooq Marble Industries</td>
<td>Zubair Ishaq Bhatti</td>
<td>208, Ferozpur Road, Lahore</td>
</tr>
<tr>
<td>15</td>
<td>Usman Associates</td>
<td>Usman Hameed Bhatti</td>
<td>1st Floor 208 Ferozpur Road Lahore</td>
</tr>
<tr>
<td>16</td>
<td>Roshan Marble &amp; Granite</td>
<td>Mian Muhammad Usman</td>
<td>Main Defence Ghazi Road Near Main CNG Station Lahore</td>
</tr>
<tr>
<td>17</td>
<td>Chenab Marble</td>
<td>Javed Hayat</td>
<td>Sundar Industrial State, Lahore</td>
</tr>
<tr>
<td>18</td>
<td>Al Taiba Marble</td>
<td>Muhammad Awis</td>
<td>Ghausia Marble Market, Ferozpur Road, Lahore</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>18</td>
<td>Kanwal stone Industry</td>
<td>Ahmed Habib</td>
<td>18-km Feroz pur road Lahore</td>
</tr>
<tr>
<td>19</td>
<td>Baba gee Marble &amp; Granite</td>
<td>Javed Iqbal.</td>
<td>House No.24-A,E Street,2 Shahtaj Colony walton Lahore</td>
</tr>
<tr>
<td>20</td>
<td>Bissmillah Marble</td>
<td>Muhammad Akram</td>
<td>Main Ghazi Road Near Meraj Flour Mill Lahore</td>
</tr>
<tr>
<td>21</td>
<td>Rizwan Traders</td>
<td>Muhammad Rizwan</td>
<td>210 Main Peco Road Model Town Lahore</td>
</tr>
<tr>
<td>22</td>
<td>New Pak Marble Industries</td>
<td></td>
<td>E 23 opp Ghazi Interchange New Airport Bhatta Chowk Lahore</td>
</tr>
<tr>
<td><strong>MARDAN</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Mardan Stones</td>
<td>Asghar Khan Utmankhel</td>
<td>Small Industrail State, Nowshehra road Mardan .</td>
</tr>
<tr>
<td>2</td>
<td>Saba Marble Factory</td>
<td>Aftab Ahmad</td>
<td>Plot-94,Nowshera Ind.Estate, Bara Banda, Risalpur.Disstrict Nowshera.</td>
</tr>
<tr>
<td>3</td>
<td>Zahid Marble Industry</td>
<td>Zahid Iqbal Khan</td>
<td>Plot # 95,Nowshera Industrial Estate Bara Banda Risalpur Nowshera.</td>
</tr>
<tr>
<td>4</td>
<td>Pak National Maarble Factory</td>
<td>Muhammad Irsal Khan (16101-5763548-5)</td>
<td>Phase II Small Industrial Estate Distt Mardan</td>
</tr>
<tr>
<td>5</td>
<td>Usman Marble Factory</td>
<td>Sagheer Ahmad</td>
<td>Small Industrail State, Nowshehra, Mardan KPK</td>
</tr>
<tr>
<td>6</td>
<td>Khattak Marble Industry</td>
<td>Afzal Shah Khattak</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>7</td>
<td>Two Star Marble Industries</td>
<td>Mohammad Iqbal</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>8</td>
<td>New JDS Marble Factory</td>
<td>Jan Mohammad</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>Renewal 2017-18</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Allied Marble Factory</td>
<td>Yousaf Khan</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>2</td>
<td>Shehzad Marble Factory</td>
<td>Irfan ullah</td>
<td>Industrial Estate, Phase 1, Nowshera Road, Mardan</td>
</tr>
<tr>
<td>2</td>
<td>Shehzad Marble Factory</td>
<td>Irfan ullah</td>
<td>Industrial Estate, Phase 1, Nowshera Road, Mardan</td>
</tr>
<tr>
<td>4</td>
<td>Afridi Marble Factory</td>
<td>Abdul Ghaffar Khan</td>
<td>Industrial Estate, Phase 2, Nowshera Road, Mardan</td>
</tr>
<tr>
<td>5</td>
<td>Gul Marble Industry</td>
<td>Khan Zeb</td>
<td>Industrial Estate, Phase 1, Nowshera Road, Mardan</td>
</tr>
<tr>
<td>6</td>
<td>Ittefaq Marble Factory</td>
<td>Jehangir Khan</td>
<td>Industrial Estate, Phase 1, Nowshera Road</td>
</tr>
<tr>
<td>7</td>
<td>G.S.N Marble</td>
<td>Hameed Ullah</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>8</td>
<td>National Marble Factory</td>
<td>Raees Khan</td>
<td>S.I.E Mardan</td>
</tr>
<tr>
<td>9</td>
<td>Friends Marble Showroom</td>
<td>Ikram Ullah</td>
<td>S.I.E, Nowshera Road Mardan</td>
</tr>
<tr>
<td>10</td>
<td>Alamzeb Marble Factory</td>
<td>Riaz Ahmed</td>
<td>A-139, Bara Banda Industrial Estate, Risalpur, Nowshera</td>
</tr>
<tr>
<td>11</td>
<td>New Asim Marble Factory</td>
<td>Iftikhar Alam</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>12</td>
<td>New Zain Marble Factory</td>
<td>Syed Zain ul Wahab</td>
<td>Small Industry Estate, Nowshera Road Mardan</td>
</tr>
<tr>
<td>13</td>
<td>Pearl Marble Factory</td>
<td>Manzoor Iqbal</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>14</td>
<td>Shahab Marble Factory</td>
<td>Syed Zainul Abidin</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>15</td>
<td>New Star Marble Factory</td>
<td>Syed Shah Jahan</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>16</td>
<td>Brothers Marble Factory</td>
<td>Liaqat Ali Afridi</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>17</td>
<td>Star Marble Factory</td>
<td>Syed Mohammad Ayaz</td>
<td>Small Industry State, Mardan</td>
</tr>
<tr>
<td>18</td>
<td>Abbas Marble Factory</td>
<td>Sultan-Ul-Arifrrn</td>
<td>Phase II Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>19</td>
<td>Sadais Marble Factory</td>
<td>Wahid Ullah</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>20</td>
<td>Ali Marble Factory</td>
<td>Muhammad Adnan</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>21</td>
<td>Sadais Marble Factory</td>
<td>Wazer Azam</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>22</td>
<td>Ihtasham Marble Factory</td>
<td>Mohammad Iqbal</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>23</td>
<td>Union Marble Factory</td>
<td>Azizur Rehman</td>
<td>S.I.E Nowshera Road Mardan</td>
</tr>
<tr>
<td>24</td>
<td>New Khurasan Marble Factory</td>
<td>Abdul Aziz</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>25</td>
<td>New Sudes Marble Factory</td>
<td>Arshed Muhammad</td>
<td>Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>26</td>
<td>Rockmen Marble Factory</td>
<td>Habibur Rehman</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>27</td>
<td>Khaksaar Marble Factory</td>
<td>Syed Ahmed Jan</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>28</td>
<td>Hazara Marble Factory</td>
<td>Ajmal Khan</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>29</td>
<td>Superior Marbles</td>
<td>Pir Hazrat Said</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>30</td>
<td>Al-Sohaib Marble Factory</td>
<td>Pir Sohaib</td>
<td>S.I.E, Nowshera Road Mardan</td>
</tr>
<tr>
<td>31</td>
<td>Atif Marble Factory</td>
<td>Syed Rehmat Shah</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>32</td>
<td>Haq Marble Factory</td>
<td>Fazl E Haq</td>
<td>S.I.E, Mardan</td>
</tr>
<tr>
<td>33</td>
<td>Al-Karam SS Marble Industry (Pvt.) Limited</td>
<td>Syed Sikandar Shah (16202-5343648-5)</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>34</td>
<td>Bab-E-Khyber Marble Factory</td>
<td>Sami Ullah / Saeed Ullah</td>
<td>S.I.E mardan</td>
</tr>
<tr>
<td><strong>New Members 2017-18</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Zeeshan Marble Showroom</td>
<td>Zeeshan Zada 16101-667326-5</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>2</td>
<td>Margalla Marble Factory</td>
<td>Ajoon Shah 16101-4618788-9</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>3</td>
<td>National Marble Showroom</td>
<td>Fazli Rabbi 16101-1231503-1</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>4</td>
<td>Ahmad Marble</td>
<td>Arshad Khan 16101-1575730-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>5</td>
<td>Niyaz Marble</td>
<td>Niyaz Ali 16101-4026692-3</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>6</td>
<td>Sahil Marble Factory</td>
<td>Khan Zali 16101-5473074-1</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>7</td>
<td>Shah Sani Marble Factory</td>
<td>Zahir Shah 90403-0113235-9</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>8</td>
<td>New Gul Marble Factory</td>
<td>Mukhtiar Nabi 16102-2265437-3</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>9</td>
<td>Saba Marble Factory</td>
<td>Abdul Raheem 16101-6334160-5</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>10</td>
<td>New Sky-J Marble</td>
<td>Sohail Ahmad 16101-8321082-3</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>11</td>
<td>Sarhad Marble Factory</td>
<td>Shehzad Gul 16101-4582291-9</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>12</td>
<td>Rayan Marble Factory</td>
<td>Abdul Samad 16101-9355778-1</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>13</td>
<td>Yasir Marble Factory</td>
<td>Qaiser Khan 16101-2077049-3</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>14</td>
<td>Muhammad Hamdan Marble Factory &amp; Chemical Polish</td>
<td>Zahir Shah 16101-9794592-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>15</td>
<td>Prince Marble Industry</td>
<td>Muhammad Latif 22401-1654103-5</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>16</td>
<td>New Pak National Marble Factory</td>
<td>Noor ul Islam 17201-2151000-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>17</td>
<td>Makkah Marble Industries</td>
<td>Bakhtiar Ali 17201-0578074-1</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>18</td>
<td>Yousaf Marble Factory</td>
<td>Yousaf Khan 16101-4041587-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>19</td>
<td>Shalman Marble Factory</td>
<td>Riaz Ali 16102-2303610-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>20</td>
<td>Shams Marble Industry</td>
<td>Shams Ul Aziz Khan 15601-0371571-7</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td>21</td>
<td>Waleed Marble Factory</td>
<td>Noor Muhammad 16101-7413592-9</td>
<td>Smaill Industrial Estate, Mardan</td>
</tr>
<tr>
<td><strong>PESHAWAR</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Indus Mining Company</td>
<td>Shahid ur Rehman</td>
<td>Warsak Road, Peshawar.</td>
</tr>
<tr>
<td></td>
<td>Italian Marble</td>
<td>Kamran Atif Khan</td>
<td>Warsak Road, Michni, Mohammad Agency Fata, KPK .</td>
</tr>
<tr>
<td>2</td>
<td>Modern Marble Industry</td>
<td>M.Imran Khan</td>
<td>Worsak Road, Peshawar</td>
</tr>
<tr>
<td>3</td>
<td>Hamza Marble</td>
<td>Mushraf Ullah</td>
<td>Industrial Estate, Mulagori, Warsak Road Mohmand Agency.</td>
</tr>
<tr>
<td>4</td>
<td>Iqra Marble Factory</td>
<td>Haibat Khan</td>
<td>Warsak road darmangi garden peshawar,kpk</td>
</tr>
<tr>
<td>5</td>
<td>Shah Marble and Mining</td>
<td>Sabir Ullah</td>
<td>Near F.C post, Michni, Parchavi, Warsak Road Mohamed Agency KPK.</td>
</tr>
<tr>
<td>6</td>
<td>Pak Grinding Mills Marble &amp; Mining Company</td>
<td>M. Sabir</td>
<td>Perchaway Industrial Estate near FC Training Center, Warsak Road, Peshawar</td>
</tr>
<tr>
<td>7</td>
<td>Z and T Marble</td>
<td>Ghazanfar Ali Khan</td>
<td>Plot # B-43 Marble City Bara Banda Risalpur Peshawar</td>
</tr>
<tr>
<td>8</td>
<td>Badal Marble.</td>
<td>Haji Bismillah Khan.</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>9</td>
<td>Kundi Marble</td>
<td>Fathe Khan Kundi</td>
<td>Warsak Road Peer Bala Peshawar</td>
</tr>
<tr>
<td>10</td>
<td>Al Nasir Marble</td>
<td>Malang Jan</td>
<td>Hayattabad, Peshawar.</td>
</tr>
<tr>
<td>11</td>
<td>Jamil Marble.</td>
<td>M. Jamil.</td>
<td>shair bridge, mala gouri, khyber agency.</td>
</tr>
<tr>
<td></td>
<td>Hussaini Marble</td>
<td>Wilayat Khan / Wazir Khan</td>
<td>Near Takhtah Baig Check Post, Baara Road Shah Kais, Khyber Agency.</td>
</tr>
<tr>
<td>12</td>
<td>Marble Complex</td>
<td>M. Anwar.</td>
<td>Warsak Road Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>13</td>
<td>Unique Marble.</td>
<td>Haji Iftikhar.</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>14</td>
<td>Al Hafiz Marble</td>
<td>Abdul Baseer</td>
<td>Mohmand Agency Peshawar</td>
</tr>
<tr>
<td>15</td>
<td>Shakeel Marble.</td>
<td>Haji Tanveer Ahmed</td>
<td>Hayatabad, Peshawar.</td>
</tr>
<tr>
<td>16</td>
<td>Moon White Marble</td>
<td>Tahir Javed</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>17</td>
<td>Pak Marble</td>
<td>Adnan</td>
<td>Plot # 1-H Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>18</td>
<td>Habib Marble</td>
<td>Ihsan Ullah</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>19</td>
<td>Trich Mir Marble</td>
<td>Muhammad Khan</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>20</td>
<td>Asim Traders</td>
<td>Irshad Ali</td>
<td>Plot # F -119, near Old Labour colony Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>21</td>
<td>Z and T Marble</td>
<td>Ghazanfar Ali Khan</td>
<td>Plot No B-43 Marble City Bara Banda Risalpur Peshawar</td>
</tr>
<tr>
<td>22</td>
<td>Iqbal Marble Factory</td>
<td>Mr. Javid Iqbal</td>
<td>Warsak Road Darmangi State Peshawar</td>
</tr>
<tr>
<td>23</td>
<td>TWO STAR MARBLE</td>
<td>Usman Ghani</td>
<td>Shop 23 jan raza karkhano market jamrup road peshawar</td>
</tr>
<tr>
<td>24</td>
<td>Nazak Mir Marble Industries</td>
<td>Nazak Mir</td>
<td>Sher Burj m ulla ghori warsak road Khaber Agency Peshawar</td>
</tr>
<tr>
<td>25</td>
<td>Afridi Marble &amp; Granite</td>
<td>Shafi Ullah</td>
<td>143 Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>26</td>
<td>Indus Marble Factory</td>
<td>Fazal Karim</td>
<td>Warsak Road, IrshadAbad Peshawar</td>
</tr>
<tr>
<td>27</td>
<td>Uzair Marble Factory</td>
<td>Naseem Maqsood</td>
<td>Warsak Road, IrshadAbad Peshawar</td>
</tr>
<tr>
<td></td>
<td>Golden Marble.</td>
<td>Hidayatullah Khan</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td></td>
<td>Farhad Traders</td>
<td></td>
<td>Near Grand Hotel, University Road, Peshawar</td>
</tr>
<tr>
<td></td>
<td>Haseeb Marble &amp; Mining Company</td>
<td>Haseeb Ur Rehman (61101-3699875-3)</td>
<td>Shish Mahal Davezei, Mohamand Agency, KPK</td>
</tr>
<tr>
<td><strong>HARIPUR</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Resource Industries (Pvt.) Limited</td>
<td>ilyas Muhammad</td>
<td>Plot # 45, Pase I, Hattar Industril State, Haripur</td>
</tr>
<tr>
<td><strong>CM MEMBERS</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>Indus Stone</td>
<td>Muhammad Israr Khan</td>
<td>Plot # E-126, Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>2</td>
<td>Spin Ghar Marble Industry.</td>
<td>Himat Shah</td>
<td>Warsak Road Peer bala Chawk Frontier CNG Peshawar.</td>
</tr>
<tr>
<td>3</td>
<td>Haris Trading Company</td>
<td>ilyas Muhammad</td>
<td>47,Faiz Market, Chowk Yadgar Peshawar.</td>
</tr>
<tr>
<td>4</td>
<td>Marble City</td>
<td>M. Irshad</td>
<td>Plot-123, Industrial Estate,Hayattabad, Peshawar.</td>
</tr>
<tr>
<td>5</td>
<td>Gul Marble</td>
<td>Altaf Hussain</td>
<td>Plot-38C Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>6</td>
<td>Trichmir Marble &amp; Granite</td>
<td>Khalid Saeed</td>
<td>E-126 Industrial Estate, Hayatabad Peshawar</td>
</tr>
<tr>
<td><strong>JAHANGIRA, NOWSHERA</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Noman Marble Factory.</td>
<td>Bakhtar Ali.</td>
<td>G.T.Road, Jehangira</td>
</tr>
<tr>
<td>2</td>
<td>Zubair Marble Factory</td>
<td>Namdar Khan</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>3</td>
<td>Kamran Ahmed Marble Fatory</td>
<td>Muhammad Hanif</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>4</td>
<td>Tahir Sons Marble Factory</td>
<td>Muhammad Asif Khan</td>
<td>G.T Road Jahangira Distric Nowshera</td>
</tr>
<tr>
<td>5</td>
<td>Riaz Marble Factory</td>
<td>Muhammad Riaz</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>6</td>
<td>Ittefaq Marble Factory</td>
<td>Mian Fazeelat Shah</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>7</td>
<td>Yahya Marble</td>
<td>Mir Afazl Khan</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>8</td>
<td>Aziz Marble Factory.</td>
<td>Wali-ur-Rehman.</td>
<td>G.T Road Nihalpura Nodia, Jehangira.</td>
</tr>
<tr>
<td>9</td>
<td>Popular Marble Factory</td>
<td>Samar Gul</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera.</td>
</tr>
<tr>
<td>10</td>
<td>Farooq Marble Factory</td>
<td>Haji Muhammad Farooq</td>
<td>G.T Road Kairabad Distric Nowshera</td>
</tr>
<tr>
<td>11</td>
<td>Sangum Marble Factory</td>
<td>Muhammad Islam</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera.</td>
</tr>
<tr>
<td>12</td>
<td>Asad Ali Marble Factory</td>
<td>Noor Zad Gull</td>
<td>Opp: PSO Petrolium Pump G T Road Khairabad Nowshera</td>
</tr>
<tr>
<td>13</td>
<td>Kashmir Kamran Marble</td>
<td>Kamran Naseer</td>
<td>Near Khairabad Bus Stop Afghan Hotel G.T Road Khairabad Nowshera</td>
</tr>
<tr>
<td>14</td>
<td>Ahmed Marble</td>
<td>Kabir Ahmed</td>
<td>G.T Road Nodia Jahangira Distric Nowshera</td>
</tr>
<tr>
<td>15</td>
<td>Malak Marble Industries</td>
<td>Mumtaz Ali</td>
<td>Dewana Baba Road Bachkata Chawak,Tehsil Doggar,,Disstrict Buner,KPK</td>
</tr>
<tr>
<td>16</td>
<td>Aziz Marble Factory</td>
<td>Fayaz-Ur-Rehman</td>
<td>Aziz Marble stone Factory, G.T.Road, Nodia Jehangira, Disstt Nowshera.</td>
</tr>
<tr>
<td>17</td>
<td>Hamza Marble Factory</td>
<td>Rahmat Ullah</td>
<td>G.T.Road, Nehalpura, Jehangira, Disstt Nowshera.</td>
</tr>
<tr>
<td>18</td>
<td>Muhammad Mobeen Marble Factory</td>
<td>Muhammad Naseem</td>
<td>G.T Road Nihalpura Jehangira Disstt Nowshera.</td>
</tr>
<tr>
<td>19</td>
<td>M.K Tools</td>
<td>Manawar Khan</td>
<td>G T Road, Jahangira</td>
</tr>
<tr>
<td>20</td>
<td>Al-Hayat Marble Factory.</td>
<td>Shafqat Hayat / Shaukat Hayat</td>
<td>G.T Road, Jahangira</td>
</tr>
<tr>
<td>21</td>
<td>Shoukat Marble factory</td>
<td>Haji Shoukat Saeed Khan</td>
<td>G.T Road Jehangira, Distric Nowshera.</td>
</tr>
<tr>
<td>22</td>
<td>Junaid Marble Factory</td>
<td>Sadiq Shah</td>
<td>Opposite to Jabran Kanta, Nehal Pura, G-T Road, Jehangira Disstrict Nowshera, K.P.K,</td>
</tr>
<tr>
<td>23</td>
<td>New Didar Marble</td>
<td>Mansoor Ali</td>
<td>Nehal pura G.T Road JehangiraDistt Nowshera</td>
</tr>
<tr>
<td>26</td>
<td>Insaf Marble</td>
<td>Rahmat Ullah</td>
<td>G.T Road Jehangira Disstt Nowshera.</td>
</tr>
<tr>
<td>27</td>
<td>Suliman Marble</td>
<td>Abdul hakeem</td>
<td>G T Road Jahangira</td>
</tr>
<tr>
<td>28</td>
<td>Pang pir Marble</td>
<td>Muhammad Asif Khan</td>
<td>G T Road Jahangira</td>
</tr>
<tr>
<td>29</td>
<td>Tonsa Marble Factory</td>
<td>Muhammad Aslam</td>
<td>Nodia Utrah, G.T.Road Jehangira, Disstt Nowshera.</td>
</tr>
<tr>
<td>30</td>
<td>Azad Marble Factory</td>
<td>Sami Ullah</td>
<td>G.T.Road Nodia, Jehangira, Disstt Nowshera.</td>
</tr>
<tr>
<td>31</td>
<td>Atiq-Ur-Rehman Marble Factory</td>
<td>Feroz Shah</td>
<td>G-T Road, Near Nari Pull, Jehangira, Disstrict Nowshera.</td>
</tr>
<tr>
<td>32</td>
<td>Zam Zam Marble Factrory</td>
<td>Qamer Zaman</td>
<td>G-T Road, Near Nari Pull, Jehangira, Disstrict Nowshera.</td>
</tr>
<tr>
<td>33</td>
<td>Shehryar&amp;Awais</td>
<td>Muhammad Iqbal</td>
<td>Nihal pura p.o.box khairabad Distt Noshara</td>
</tr>
<tr>
<td>34</td>
<td>Fronter Punjab</td>
<td>Abdul Razaaq</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>35</td>
<td>New Didar Marble</td>
<td>Mansoor Ali</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>36</td>
<td>Imaad Marble</td>
<td>Sheir Wali Khan</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>37</td>
<td>Arif &amp; Suns Marble</td>
<td>Shoukat Mehmood</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>38</td>
<td>Wali Marble Factory</td>
<td>Nihar Ahmed</td>
<td>G.T. Road Jehangira</td>
</tr>
<tr>
<td>39</td>
<td>New Ittehad Marble</td>
<td>Fazal Bacha</td>
<td>G.T Road Nihalpura Jehangira Disst Nowshera</td>
</tr>
<tr>
<td>40</td>
<td>Usman Chips &amp; Marble Factory</td>
<td>Fayaz-Ur-Rehman</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>41</td>
<td>Khattak Marrble</td>
<td>Majid Shah Khattak</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>42</td>
<td>Ghulam Mustafa Marble</td>
<td>Mohammad Khalid</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>43</td>
<td>Pir Marble</td>
<td>Nisar Ahmad</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>44</td>
<td>Luqman Marble</td>
<td>Khan Muhammad</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>45</td>
<td>Haris Marble</td>
<td>Muhammad Seyar Khan</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>46</td>
<td>Qadir Marble</td>
<td>Qadir Yar</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>47</td>
<td>Marble International Factory</td>
<td>Khalid Iqbal</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>48</td>
<td>Chaudhary Marble</td>
<td>Nigar Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>49</td>
<td>Ihsan Marble</td>
<td>Muneer Khan</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>50</td>
<td>Ishtiaq Marble</td>
<td>Ishraq Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>51</td>
<td>Bunir Marble</td>
<td>Saddiq Abbas</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>52</td>
<td>Dir Marble</td>
<td>Gul Abbas</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>53</td>
<td>Kohinoor Marble</td>
<td>Farooq Azam</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>54</td>
<td>Nawab Marble</td>
<td>Nawab Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>55</td>
<td>Rehman Marble</td>
<td>Sajid Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>56</td>
<td>Mian Marble</td>
<td>Inam Ullah</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>57</td>
<td>Adnan Marble</td>
<td>Amjad Ali</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>58</td>
<td>Sangam Marble</td>
<td>Muhammad Islam / Shahab Islam</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>New Members 2017-18</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>59</td>
<td>Hussain Marble Factory</td>
<td>Noshad Ali 17201-8795653-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>60</td>
<td>Taqwa Marble</td>
<td>Saltanat Khan 17201-2218504-5</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>61</td>
<td>Kabeer Marble Industry</td>
<td>Kabeer Ahmad Khan 17201-5676082-1</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>62</td>
<td>Ahmed Marble Industry</td>
<td>Nazir Ahmad 17201-7531668-9</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>63</td>
<td>Tariq Ayub Marble Factory</td>
<td>Gul Nawab Khan 17201-2272494-3</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>64</td>
<td>Yahya Marble Factory</td>
<td>Muzafar Khan 17201-2321961-5</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>65</td>
<td>Pakistan Marble Chips Factory</td>
<td>Abdul Rehman 17201-2216278-5</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>66</td>
<td>Pak Afridi Marble Industries</td>
<td>Muhammad Parvez Khan 17201-2311704-3</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>67</td>
<td>Musa Marble Factory</td>
<td>Safdar Khan 17201-8146720-5</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>68</td>
<td>Zahid Marble Factory</td>
<td>Zahid Ali Zahid 34502-6076868-5</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>69</td>
<td>Al Sudais Marble Factory</td>
<td>Lal Badshah 17201-2083591-9</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>70</td>
<td>Hasnat Marble Facrory</td>
<td>Muhammad Khalid Khan 17201-4928360-1</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>71</td>
<td>Imtiaz Marble Factory</td>
<td>Imtiaz Ali Shah 17201-2295639-5</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>72</td>
<td>Imperial Marble and Chips Industries</td>
<td>Nasir Khan 17201-2367020-1</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>73</td>
<td>Makka Marble Factory</td>
<td>Rustam Khan 17201-5103298-7</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>74</td>
<td>Sheharyar Marble Factory</td>
<td>Sheharyar Khan 17201-5453003-1</td>
<td>G.T Road, Nowshera</td>
</tr>
<tr>
<td>75</td>
<td>Gul Marble Factory</td>
<td>Faqeer Gul 16201-4719872-9</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>76</td>
<td>Araaf Marble Factory</td>
<td>Muhammad Ashfaq 17201-2150896-7</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>77</td>
<td>Zaakir Marble &amp; Chips Factory</td>
<td>Zahid Iqbal 17201-2276741-9</td>
<td>G.T Road Khairabad, Nowshera</td>
</tr>
<tr>
<td>78</td>
<td>Gohar Marble Industry</td>
<td>Gohar Zaman 61101-9210378-7</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>79</td>
<td>United Marble Industry</td>
<td>Jamshed Ali 17201-2202157-7</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>80</td>
<td>Amrina Marble</td>
<td>Muhammad Zahid 16201-0744592-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>81</td>
<td>Shama Marble Factory</td>
<td>Israil Khan 17201-2218094-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>82</td>
<td>Hussain Marble Factory</td>
<td>Pur Dil Khan 16201-2487584-9</td>
<td>G.T Road, Nowshera</td>
</tr>
<tr>
<td>83</td>
<td>Tounsa Marble Factory</td>
<td>Asmat Nawaz 32103-6937340-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>84</td>
<td>Nobat Khan Marble Factory &amp; Grinding Mills</td>
<td>Nobat Khan 17201-2228080-9</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>85</td>
<td>Shahzeb Marble Factory</td>
<td>Mushtaq Ahmad 42401-6544578-1</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>86</td>
<td>Yaseen Marble Factory</td>
<td>Atiq Ur Rehman 37303-7720987-3</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td>87</td>
<td>Imran Marble Industry</td>
<td>Shaukat Imran 17201-4318414-9</td>
<td>G.T Road Jahangira, Nowshera</td>
</tr>
<tr>
<td><strong>CHARSADDA</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Pak Marble industry</td>
<td>Shakir Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>2</td>
<td>Marble Zone Industries</td>
<td>Imdad Hussain</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>5</td>
<td>Farman Marble Traders</td>
<td>Farman Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>6</td>
<td>Lasani Marble Factory International (17101-0325282-3)</td>
<td>Naimat Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>7</td>
<td>Sarhad Marble</td>
<td>Amanat Khan</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>8</td>
<td>New Ziarat Marble Factory</td>
<td>Noor Rehman Saafi</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>9</td>
<td>Samnat Marble Industry</td>
<td>Haji Gul Bahadar</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>10</td>
<td>Shah Khalid Saafi Marble Factories</td>
<td>Shah Khalid</td>
<td>Khwaja wass near Safel korona Shabqadar Fort</td>
</tr>
<tr>
<td>11</td>
<td>Naseer Saafi Marble factory</td>
<td>Momin Khan</td>
<td>Industrial State, Subhan Khwar, tehsial Shabqadar fort, disst Charsadda</td>
</tr>
<tr>
<td>12</td>
<td>Frontier Marble</td>
<td>Imran Khan</td>
<td>Subhan Khawar Industrial Estate Tehsil Shabqadar Charsadda</td>
</tr>
<tr>
<td>13</td>
<td>Hamza Marble Industry</td>
<td>Hamza ullah Khan</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada.</td>
</tr>
<tr>
<td>14</td>
<td>Universal Mining Company</td>
<td>Rahim Shah / Sultan Shah (17101-0402933-5)</td>
<td>Pir Qalla Mohmand Agency,Tehsil Shabqadar Charsadda</td>
</tr>
<tr>
<td>15</td>
<td>Umer Marble Industry (card sent)</td>
<td>Muhammad Nawaz</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>16</td>
<td>Azam Marble</td>
<td>Sheraz Liaqat</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>17</td>
<td>Sikndar Khan Marble &amp; Quadars Powder Factory</td>
<td>Arshad</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>18</td>
<td>Insaf Marble Industry</td>
<td>M.Ibrahim</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>19</td>
<td>Classic Marble</td>
<td>Ilyas</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>20</td>
<td>Shabqadar Marble</td>
<td>Darbar Ali</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>21</td>
<td>Jamshed Marble</td>
<td>Abd-ur-Rehman</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>22</td>
<td>Gul Shali Marble</td>
<td>Nasr Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>23</td>
<td>Rehan Marble</td>
<td>Mian Wali Gul</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>24</td>
<td>Faisal Marble</td>
<td>Rizwan Ullah</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>25</td>
<td>Mian Marble Factory</td>
<td>Mian Wali Gul</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>26</td>
<td>S.A.M Minning &amp; Marble (Card sent)</td>
<td>Saeed Khan</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>27</td>
<td>Naveed Marble (card sent)</td>
<td>Inayat Ur Rehman</td>
<td>Industrial State, Subhan Khwar Shabqadar, Charsada</td>
</tr>
<tr>
<td>28</td>
<td>Haseeb Marble &amp; Mining Compnay</td>
<td>Haseeb Ur Rehman</td>
<td></td>
</tr>
<tr>
<td><strong>SWAT</strong></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>S #</td>
<td>Name of Company</td>
<td>Name of Owner</td>
<td>Address</td>
</tr>
<tr>
<td>1</td>
<td>Silko marble</td>
<td>Abu bakar Siddque</td>
<td>G.T Road Barikot Swat.</td>
</tr>
<tr>
<td>2</td>
<td>Ahmad Marble</td>
<td>Abaidullah</td>
<td>Khawaja abad Pangorah Distt ,Teh Swat</td>
</tr>
<tr>
<td>3</td>
<td>PAMIR Marble &amp; Granite</td>
<td>SARDAR ALI</td>
<td>Near AYoub Bridge Kanju Swat</td>
</tr>
<tr>
<td>4</td>
<td>Ahmad Marble</td>
<td>Abaidullah</td>
<td>Khawaja abad Pangorah Distt ,Teh Swat</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/04.associate-members/associate-members-2016-2017", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
