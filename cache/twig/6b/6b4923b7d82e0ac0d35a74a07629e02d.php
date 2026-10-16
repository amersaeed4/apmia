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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/03.corporate-members/corporate-members-list-2017-2018 */
class __TwigTemplate_9b4d9ed6dd2646115edce3008aa769f6_sourced extends Template
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
        yield "<p><strong>Corporate members list 2017-18</strong></p>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Owner</th>
<th>Name of Company</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Muhammad Arif Butt</td>
<td>United Diamound Tools (PVT)Ltd</td>
<td>P-45, St-10, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>2</td>
<td>Ch. M. Jahangir Iqbal</td>
<td>Kashmir Marble</td>
<td>P-137-G, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>3</td>
<td>Mian Farrukh Munir</td>
<td>Kohsar Industry</td>
<td>P-204, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>4</td>
<td>Muhammad Younas</td>
<td>Al-Faisal Marble</td>
<td>G.T. Road, Tarnol Islamabad</td>
</tr>
<tr>
<td>6</td>
<td>Muhammad Saeed Yousaf</td>
<td>M.Yousaf Engineering</td>
<td>P-247, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>7</td>
<td>Muhammad Shakeel Munir</td>
<td>Lepak Mining Company (Pvt.) Ltd</td>
<td>P-260, St-8, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>9</td>
<td>Muhhmad Arif</td>
<td>Mehran Marmi Industries Corps</td>
<td>1-D-9/3 Qasba Metroville Manghopir Road Khi.</td>
</tr>
<tr>
<td>11</td>
<td>Ilyas Muhammad</td>
<td>Haris Trading Company</td>
<td>47,Faiz Market, Chowk Yadgar Peshawar.</td>
</tr>
<tr>
<td>15</td>
<td>Muhammad Saleem Mughal</td>
<td>SAS Enterprises</td>
<td>260,Street.#08,I-9/3,Islamabad</td>
</tr>
<tr>
<td>17</td>
<td>Noman Baqi Siddiqi</td>
<td>Marble International Pvt Ltd.</td>
<td>1-C-51/2 St-5 Bl-5 qasba Metroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>19</td>
<td>Abdul Hameed Sheera</td>
<td>Marina Industries</td>
<td>Plot # F-549, S.I.T.E, Karachi</td>
</tr>
<tr>
<td>20</td>
<td>Sher Ahmed Khanzada</td>
<td>SAK International Corp</td>
<td>Alince Build-97 Molji street Opp M W Tower Cpo Khi</td>
</tr>
<tr>
<td>21</td>
<td>Khurram Rangoonwala</td>
<td>Hanam Corporation</td>
<td>R-8 3rd fir Textile Plaza M.A jinnah road Khi.</td>
</tr>
<tr>
<td>22</td>
<td>Mr.iqbal Amlani</td>
<td>Amlani Enterprises</td>
<td>1-C-78 &amp; 79 St-5/5 qasba Metroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>23</td>
<td>Mohammad Saleem Khan</td>
<td>S.S Stone Pvt Ltd</td>
<td>A-3 2ND Floor Shafeq Plaza Sarwar Shaheen Road, Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Mr Mohammad Waseem</td>
<td>Pak Mijin Trading Co</td>
<td>Nc-31/9 Deh Manghopir, Nusrat Bhutto Colony, Karachi</td>
</tr>
<tr>
<td>25</td>
<td>Syed Kashif Raza</td>
<td>T K Corporation</td>
<td>29/11 Khayaban-e-Momin DHA Ph 5 Karachi</td>
</tr>
<tr>
<td>26</td>
<td>Muhhmad Shabbir</td>
<td>Onyx Art</td>
<td>Anum Trade Centre 5-c Sunset Bulivard DHA Khi.</td>
</tr>
<tr>
<td>27</td>
<td>Mr.Muhmmad Akbar</td>
<td>Matrix International Trading Corp</td>
<td>A-166 BL-L North Nazimabad Khi</td>
</tr>
<tr>
<td>28</td>
<td>Nadeem Ahmed</td>
<td>Shamraiz Marble</td>
<td>Plot-6,Mehmood Plaza, I-9.Islamabad</td>
</tr>
<tr>
<td>29</td>
<td>Mr. Nadeem Khan</td>
<td>Panorama Marbles</td>
<td>D-52 Bl-5 federal B area Khi</td>
</tr>
<tr>
<td>30</td>
<td>S.S Hayat Khan Jogezai</td>
<td>T J Marble</td>
<td>Loralai Balochistan</td>
</tr>
<tr>
<td>31</td>
<td>Ch. Wajid Ali</td>
<td>Wajid Usman Marble &amp; Granite</td>
<td>Plot # 4. Main Ghazi Road, Lahore</td>
</tr>
<tr>
<td>32</td>
<td>Muhammad Amer Saeed</td>
<td>Faisal Granite &amp; Marble</td>
<td>8-E Ghazi Road Defence Lahore</td>
</tr>
<tr>
<td>34</td>
<td>Muhammad Haroon Rashid</td>
<td>Finesse Corporation</td>
<td>130/2 P Street off Sehar Phase 7 DHA Karachi</td>
</tr>
<tr>
<td>35</td>
<td>Javed Abbass</td>
<td>Horizons international</td>
<td>148, Huma Block, Allama Iqbal Town, Lahore</td>
</tr>
<tr>
<td>36</td>
<td>Azeem Asghar Chugtai</td>
<td>Azeem Industries</td>
<td>Ic Qasba Metrovill Mp Road Karachi</td>
</tr>
<tr>
<td>39</td>
<td>Adnan Kashif Khan</td>
<td>Golden Stone International (PVT) LTD</td>
<td>Office #5,6 Bilal Plaza Blue Area Jinnah Avenue ISB</td>
</tr>
<tr>
<td>40</td>
<td>Khadim Hussain</td>
<td>Hussain Trading Company</td>
<td>216, Main Ferozpur Road,Near Wapda Hospital, Lahore</td>
</tr>
<tr>
<td>42</td>
<td>Saleem Raza/Muhammad Aslam</td>
<td>Final Touch Marble &amp; Granite</td>
<td>Link Defence Rd opp al shifa hospital Main Ghazi Rd LHR</td>
</tr>
<tr>
<td>43</td>
<td>Muhammad Farooq</td>
<td>Pasha Marble</td>
<td>3rd Rimjhim, Shop Center ZC-10, Gulshan E Iqbal KHI</td>
</tr>
<tr>
<td>44</td>
<td>Shahzada Bashir</td>
<td>Shahzad Marble &amp; Granite</td>
<td>Sangam Markete Tall Plaza T-Chowk Rawat Islamabad</td>
</tr>
<tr>
<td>45</td>
<td>Mr. Sanaullah Khan</td>
<td>Sanco Marble</td>
<td>Plot 161/1 Metrovill Manghopir, Karachi</td>
</tr>
<tr>
<td>46</td>
<td>M.Afzal Shahid</td>
<td>K-2 Corporation</td>
<td>40- Sam Plaza Haider Road Rawalpindi</td>
</tr>
<tr>
<td>47</td>
<td>Farooq Hameed Bhati (35202-3304173-9)</td>
<td>Reliance Traders</td>
<td>208 Ferozpur Road Lahore</td>
</tr>
<tr>
<td>48</td>
<td>M. Irshad</td>
<td>Marble City</td>
<td>Plot 123-A, Industrial Estate,Hayattabad, Peshawar.</td>
</tr>
<tr>
<td>57</td>
<td>Adnan Faisal</td>
<td>Parco Marble</td>
<td>Plot# 350/1, Hamdard University Rd, Mabghopir KHI</td>
</tr>
<tr>
<td>58</td>
<td>Mumtaz Muhammad</td>
<td>Stone Mart Marble</td>
<td>Mian Ghazi Road, Opp Al-Shifa Hospital Lahore</td>
</tr>
<tr>
<td>59</td>
<td>Aftab Ahmad</td>
<td>Roshan Marble &amp; Granite</td>
<td>Mian Ghazi Road,near Mian CNG station lhr</td>
</tr>
<tr>
<td>60</td>
<td>M.Nazir</td>
<td>F M.N International Trading</td>
<td>nc/4 Manghopir Road karachi</td>
</tr>
<tr>
<td>63</td>
<td>Muhammad Arif Butt</td>
<td>United Tools (PVT)Ltd</td>
<td>P-45, St-10, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>64</td>
<td>Haqeeq Ahmeed (35201-1392631-9)</td>
<td>Haqeeq Marbles</td>
<td>Ichra ferozpur road Lahore</td>
</tr>
<tr>
<td>65</td>
<td>Agha Shahid Nawaz Khan (15201-0604121-1)</td>
<td>Pakistan Mining &amp; Expoloration</td>
<td>House #.5, JAIL ROAD HURA TEHSIL, DISTT, QUETTA (Agha House, P.O Box-1, Chiral, 17200)</td>
</tr>
<tr>
<td>66</td>
<td>Javed Hayat</td>
<td>JKR Traders/GA Marble</td>
<td>57, R-1 Johar Town, LAHORE</td>
</tr>
<tr>
<td>68</td>
<td>Umair Sajjad</td>
<td>Huzaifa marble</td>
<td>26 A Smaill Industrial Estate TAXILA</td>
</tr>
<tr>
<td>69</td>
<td>Muhammad M Iqbal (61101-6518545-5)</td>
<td>Granite and Stone processing</td>
<td>G.T Road Sangjani, Islamabad</td>
</tr>
<tr>
<td>70</td>
<td>Mohsin Shah Khattak (16101-1137748-5)</td>
<td>Marjan Marble Industry</td>
<td>S.I.E Mardan</td>
</tr>
<tr>
<td>71</td>
<td>Noman Sultan/ Shoaib Sultan</td>
<td>Popular Marble Industries</td>
<td>Plot NC 31 Mangopir Road KARACHI</td>
</tr>
<tr>
<td>73</td>
<td>Asim Ahmed (42401-1666082-3)</td>
<td>Asif &amp; Company</td>
<td>Shed # NS 3, Plot # D-16, Site Industrial Area, Karachi</td>
</tr>
<tr>
<td>74</td>
<td>Mukhtar Ahmed, Director (37405-0344255-9)</td>
<td>Det Stone Pvt Ltd (<a href=\"mailto:info@det.com.pk\">info@det.com.pk</a>)</td>
<td>Office # 102, Ali Plaza # MC-2, Main Bolevard, Phase V, Ghauri Town, Rawalpindi</td>
</tr>
<tr>
<td>75</td>
<td>Amir Hanif (35201-2169189-5)</td>
<td>Pak Marble Industry</td>
<td>Defence Ghazi Road, Imdad Market, Lahore Cantt</td>
</tr>
<tr>
<td>76</td>
<td>Ibad Ali (16201-0898222-3)</td>
<td>Al-Hadi Marble Factory</td>
<td>China Market, G-T Road Jehangira, Nowshera.</td>
</tr>
<tr>
<td>77</td>
<td>Hazrat Younas (17201-3945043-7)</td>
<td>Fazal Qadir Marble Factory</td>
<td>G-T Road Jehangira, Nowshera</td>
</tr>
<tr>
<td>78</td>
<td>Naqeeb Ahmad (16201-7805574-3</td>
<td>Royal Marble Factory</td>
<td>G-T Road Jehangira, Nowshera</td>
</tr>
<tr>
<td>79</td>
<td>Jamshad khan</td>
<td>New Amazai Marble</td>
<td>Plot no 10 Deh Manghopir, Karachi</td>
</tr>
<tr>
<td>80</td>
<td>Abdul Malik/Fayyaz khan</td>
<td>Meezan Marble</td>
<td>Nc 25 nusrat, Manghopir Road Karachi</td>
</tr>
<tr>
<td>81</td>
<td>Rahat Khan</td>
<td>Hamdan Marble</td>
<td>Nc 26 nusrat, Manghopir Road Karachi</td>
</tr>
<tr>
<td>82</td>
<td>Malik Salman</td>
<td>Onyx Saloon</td>
<td>24/6 BL-2 Qasba metroville Manghopir Road khi</td>
</tr>
<tr>
<td>88</td>
<td>Sultan Ul Arifeen (17201-5141310-5)</td>
<td>Abbas Marble Factory</td>
<td>Phase II Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>83</td>
<td>Tariq Anis (Mohsin) (42301-8202144-1)</td>
<td>S.M.B Marble (11-00-6802-024-91)</td>
<td>NC 26-31, Manghopir Road, Karachi</td>
</tr>
<tr>
<td>84</td>
<td>Ibrar Ali (16202-4790982-1)</td>
<td>Swabi Marble Factory</td>
<td>Mingora Road, Torwasak, Buner, KPK</td>
</tr>
<tr>
<td>85</td>
<td>M. Rizwan (35202-8558896-5)</td>
<td>Rizwan Marble &amp; Granite (simplest_<a href=\"mailto:irfan@yahoo.com\">irfan@yahoo.com</a>)</td>
<td>186-Ferozpur Road, Ichra Lahore</td>
</tr>
<tr>
<td>86</td>
<td>Khalid Mehmood (35202-17953651-1)</td>
<td>Canal Marble &amp; Granite</td>
<td>18 Km Multan Road, Lahore</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/03.corporate-members/corporate-members-list-2017-2018";
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
        return new Source("<p><strong>Corporate members list 2017-18</strong></p>
<table>
<thead>
<tr>
<th>S.No</th>
<th>Name of Owner</th>
<th>Name of Company</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Muhammad Arif Butt</td>
<td>United Diamound Tools (PVT)Ltd</td>
<td>P-45, St-10, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>2</td>
<td>Ch. M. Jahangir Iqbal</td>
<td>Kashmir Marble</td>
<td>P-137-G, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>3</td>
<td>Mian Farrukh Munir</td>
<td>Kohsar Industry</td>
<td>P-204, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>4</td>
<td>Muhammad Younas</td>
<td>Al-Faisal Marble</td>
<td>G.T. Road, Tarnol Islamabad</td>
</tr>
<tr>
<td>6</td>
<td>Muhammad Saeed Yousaf</td>
<td>M.Yousaf Engineering</td>
<td>P-247, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>7</td>
<td>Muhammad Shakeel Munir</td>
<td>Lepak Mining Company (Pvt.) Ltd</td>
<td>P-260, St-8, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>9</td>
<td>Muhhmad Arif</td>
<td>Mehran Marmi Industries Corps</td>
<td>1-D-9/3 Qasba Metroville Manghopir Road Khi.</td>
</tr>
<tr>
<td>11</td>
<td>Ilyas Muhammad</td>
<td>Haris Trading Company</td>
<td>47,Faiz Market, Chowk Yadgar Peshawar.</td>
</tr>
<tr>
<td>15</td>
<td>Muhammad Saleem Mughal</td>
<td>SAS Enterprises</td>
<td>260,Street.#08,I-9/3,Islamabad</td>
</tr>
<tr>
<td>17</td>
<td>Noman Baqi Siddiqi</td>
<td>Marble International Pvt Ltd.</td>
<td>1-C-51/2 St-5 Bl-5 qasba Metroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>19</td>
<td>Abdul Hameed Sheera</td>
<td>Marina Industries</td>
<td>Plot # F-549, S.I.T.E, Karachi</td>
</tr>
<tr>
<td>20</td>
<td>Sher Ahmed Khanzada</td>
<td>SAK International Corp</td>
<td>Alince Build-97 Molji street Opp M W Tower Cpo Khi</td>
</tr>
<tr>
<td>21</td>
<td>Khurram Rangoonwala</td>
<td>Hanam Corporation</td>
<td>R-8 3rd fir Textile Plaza M.A jinnah road Khi.</td>
</tr>
<tr>
<td>22</td>
<td>Mr.iqbal Amlani</td>
<td>Amlani Enterprises</td>
<td>1-C-78 &amp; 79 St-5/5 qasba Metroville Manghopir Rd Khi</td>
</tr>
<tr>
<td>23</td>
<td>Mohammad Saleem Khan</td>
<td>S.S Stone Pvt Ltd</td>
<td>A-3 2ND Floor Shafeq Plaza Sarwar Shaheen Road, Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Mr Mohammad Waseem</td>
<td>Pak Mijin Trading Co</td>
<td>Nc-31/9 Deh Manghopir, Nusrat Bhutto Colony, Karachi</td>
</tr>
<tr>
<td>25</td>
<td>Syed Kashif Raza</td>
<td>T K Corporation</td>
<td>29/11 Khayaban-e-Momin DHA Ph 5 Karachi</td>
</tr>
<tr>
<td>26</td>
<td>Muhhmad Shabbir</td>
<td>Onyx Art</td>
<td>Anum Trade Centre 5-c Sunset Bulivard DHA Khi.</td>
</tr>
<tr>
<td>27</td>
<td>Mr.Muhmmad Akbar</td>
<td>Matrix International Trading Corp</td>
<td>A-166 BL-L North Nazimabad Khi</td>
</tr>
<tr>
<td>28</td>
<td>Nadeem Ahmed</td>
<td>Shamraiz Marble</td>
<td>Plot-6,Mehmood Plaza, I-9.Islamabad</td>
</tr>
<tr>
<td>29</td>
<td>Mr. Nadeem Khan</td>
<td>Panorama Marbles</td>
<td>D-52 Bl-5 federal B area Khi</td>
</tr>
<tr>
<td>30</td>
<td>S.S Hayat Khan Jogezai</td>
<td>T J Marble</td>
<td>Loralai Balochistan</td>
</tr>
<tr>
<td>31</td>
<td>Ch. Wajid Ali</td>
<td>Wajid Usman Marble &amp; Granite</td>
<td>Plot # 4. Main Ghazi Road, Lahore</td>
</tr>
<tr>
<td>32</td>
<td>Muhammad Amer Saeed</td>
<td>Faisal Granite &amp; Marble</td>
<td>8-E Ghazi Road Defence Lahore</td>
</tr>
<tr>
<td>34</td>
<td>Muhammad Haroon Rashid</td>
<td>Finesse Corporation</td>
<td>130/2 P Street off Sehar Phase 7 DHA Karachi</td>
</tr>
<tr>
<td>35</td>
<td>Javed Abbass</td>
<td>Horizons international</td>
<td>148, Huma Block, Allama Iqbal Town, Lahore</td>
</tr>
<tr>
<td>36</td>
<td>Azeem Asghar Chugtai</td>
<td>Azeem Industries</td>
<td>Ic Qasba Metrovill Mp Road Karachi</td>
</tr>
<tr>
<td>39</td>
<td>Adnan Kashif Khan</td>
<td>Golden Stone International (PVT) LTD</td>
<td>Office #5,6 Bilal Plaza Blue Area Jinnah Avenue ISB</td>
</tr>
<tr>
<td>40</td>
<td>Khadim Hussain</td>
<td>Hussain Trading Company</td>
<td>216, Main Ferozpur Road,Near Wapda Hospital, Lahore</td>
</tr>
<tr>
<td>42</td>
<td>Saleem Raza/Muhammad Aslam</td>
<td>Final Touch Marble &amp; Granite</td>
<td>Link Defence Rd opp al shifa hospital Main Ghazi Rd LHR</td>
</tr>
<tr>
<td>43</td>
<td>Muhammad Farooq</td>
<td>Pasha Marble</td>
<td>3rd Rimjhim, Shop Center ZC-10, Gulshan E Iqbal KHI</td>
</tr>
<tr>
<td>44</td>
<td>Shahzada Bashir</td>
<td>Shahzad Marble &amp; Granite</td>
<td>Sangam Markete Tall Plaza T-Chowk Rawat Islamabad</td>
</tr>
<tr>
<td>45</td>
<td>Mr. Sanaullah Khan</td>
<td>Sanco Marble</td>
<td>Plot 161/1 Metrovill Manghopir, Karachi</td>
</tr>
<tr>
<td>46</td>
<td>M.Afzal Shahid</td>
<td>K-2 Corporation</td>
<td>40- Sam Plaza Haider Road Rawalpindi</td>
</tr>
<tr>
<td>47</td>
<td>Farooq Hameed Bhati (35202-3304173-9)</td>
<td>Reliance Traders</td>
<td>208 Ferozpur Road Lahore</td>
</tr>
<tr>
<td>48</td>
<td>M. Irshad</td>
<td>Marble City</td>
<td>Plot 123-A, Industrial Estate,Hayattabad, Peshawar.</td>
</tr>
<tr>
<td>57</td>
<td>Adnan Faisal</td>
<td>Parco Marble</td>
<td>Plot# 350/1, Hamdard University Rd, Mabghopir KHI</td>
</tr>
<tr>
<td>58</td>
<td>Mumtaz Muhammad</td>
<td>Stone Mart Marble</td>
<td>Mian Ghazi Road, Opp Al-Shifa Hospital Lahore</td>
</tr>
<tr>
<td>59</td>
<td>Aftab Ahmad</td>
<td>Roshan Marble &amp; Granite</td>
<td>Mian Ghazi Road,near Mian CNG station lhr</td>
</tr>
<tr>
<td>60</td>
<td>M.Nazir</td>
<td>F M.N International Trading</td>
<td>nc/4 Manghopir Road karachi</td>
</tr>
<tr>
<td>63</td>
<td>Muhammad Arif Butt</td>
<td>United Tools (PVT)Ltd</td>
<td>P-45, St-10, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>64</td>
<td>Haqeeq Ahmeed (35201-1392631-9)</td>
<td>Haqeeq Marbles</td>
<td>Ichra ferozpur road Lahore</td>
</tr>
<tr>
<td>65</td>
<td>Agha Shahid Nawaz Khan (15201-0604121-1)</td>
<td>Pakistan Mining &amp; Expoloration</td>
<td>House #.5, JAIL ROAD HURA TEHSIL, DISTT, QUETTA (Agha House, P.O Box-1, Chiral, 17200)</td>
</tr>
<tr>
<td>66</td>
<td>Javed Hayat</td>
<td>JKR Traders/GA Marble</td>
<td>57, R-1 Johar Town, LAHORE</td>
</tr>
<tr>
<td>68</td>
<td>Umair Sajjad</td>
<td>Huzaifa marble</td>
<td>26 A Smaill Industrial Estate TAXILA</td>
</tr>
<tr>
<td>69</td>
<td>Muhammad M Iqbal (61101-6518545-5)</td>
<td>Granite and Stone processing</td>
<td>G.T Road Sangjani, Islamabad</td>
</tr>
<tr>
<td>70</td>
<td>Mohsin Shah Khattak (16101-1137748-5)</td>
<td>Marjan Marble Industry</td>
<td>S.I.E Mardan</td>
</tr>
<tr>
<td>71</td>
<td>Noman Sultan/ Shoaib Sultan</td>
<td>Popular Marble Industries</td>
<td>Plot NC 31 Mangopir Road KARACHI</td>
</tr>
<tr>
<td>73</td>
<td>Asim Ahmed (42401-1666082-3)</td>
<td>Asif &amp; Company</td>
<td>Shed # NS 3, Plot # D-16, Site Industrial Area, Karachi</td>
</tr>
<tr>
<td>74</td>
<td>Mukhtar Ahmed, Director (37405-0344255-9)</td>
<td>Det Stone Pvt Ltd (<a href=\"mailto:info@det.com.pk\">info@det.com.pk</a>)</td>
<td>Office # 102, Ali Plaza # MC-2, Main Bolevard, Phase V, Ghauri Town, Rawalpindi</td>
</tr>
<tr>
<td>75</td>
<td>Amir Hanif (35201-2169189-5)</td>
<td>Pak Marble Industry</td>
<td>Defence Ghazi Road, Imdad Market, Lahore Cantt</td>
</tr>
<tr>
<td>76</td>
<td>Ibad Ali (16201-0898222-3)</td>
<td>Al-Hadi Marble Factory</td>
<td>China Market, G-T Road Jehangira, Nowshera.</td>
</tr>
<tr>
<td>77</td>
<td>Hazrat Younas (17201-3945043-7)</td>
<td>Fazal Qadir Marble Factory</td>
<td>G-T Road Jehangira, Nowshera</td>
</tr>
<tr>
<td>78</td>
<td>Naqeeb Ahmad (16201-7805574-3</td>
<td>Royal Marble Factory</td>
<td>G-T Road Jehangira, Nowshera</td>
</tr>
<tr>
<td>79</td>
<td>Jamshad khan</td>
<td>New Amazai Marble</td>
<td>Plot no 10 Deh Manghopir, Karachi</td>
</tr>
<tr>
<td>80</td>
<td>Abdul Malik/Fayyaz khan</td>
<td>Meezan Marble</td>
<td>Nc 25 nusrat, Manghopir Road Karachi</td>
</tr>
<tr>
<td>81</td>
<td>Rahat Khan</td>
<td>Hamdan Marble</td>
<td>Nc 26 nusrat, Manghopir Road Karachi</td>
</tr>
<tr>
<td>82</td>
<td>Malik Salman</td>
<td>Onyx Saloon</td>
<td>24/6 BL-2 Qasba metroville Manghopir Road khi</td>
</tr>
<tr>
<td>88</td>
<td>Sultan Ul Arifeen (17201-5141310-5)</td>
<td>Abbas Marble Factory</td>
<td>Phase II Small Industrial Estate, Mardan</td>
</tr>
<tr>
<td>83</td>
<td>Tariq Anis (Mohsin) (42301-8202144-1)</td>
<td>S.M.B Marble (11-00-6802-024-91)</td>
<td>NC 26-31, Manghopir Road, Karachi</td>
</tr>
<tr>
<td>84</td>
<td>Ibrar Ali (16202-4790982-1)</td>
<td>Swabi Marble Factory</td>
<td>Mingora Road, Torwasak, Buner, KPK</td>
</tr>
<tr>
<td>85</td>
<td>M. Rizwan (35202-8558896-5)</td>
<td>Rizwan Marble &amp; Granite (simplest_<a href=\"mailto:irfan@yahoo.com\">irfan@yahoo.com</a>)</td>
<td>186-Ferozpur Road, Ichra Lahore</td>
</tr>
<tr>
<td>86</td>
<td>Khalid Mehmood (35202-17953651-1)</td>
<td>Canal Marble &amp; Granite</td>
<td>18 Km Multan Road, Lahore</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/03.corporate-members/corporate-members-list-2017-2018", "");
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
