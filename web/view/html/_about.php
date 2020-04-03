<? head('', array('generic.css')); ?>

<div id="side">
   <? header_box(); ?>
   </ul>
</div>

<div id="content">
   <div id="generic">
      <img src="assets/generic-top.jpg" alt="" />
      
      <h1>About ScenicOrNot</h1>
      
      <dl class="content">
         <dt>What is this site?</dt>
         <dd>
			<p>
            It&rsquo;s a game &mdash; pit your aesthetic judgements against other 
            users, and discover the lovely and not so lovely corners of Great Britain.
		</p>
         </dd>
      
         <dt>Where are all the pictures from?</dt>
         <dd>
			<p>
            The lovely people at <a href="http://www.geograph.org.uk">Geograph</a>.
			</p>
         </dd>
      
         <dt>Why did you build it?</dt>
         <dd>
			<p>
            Originally, mySociety wanted to gather a freely available nationwide dataset of
            scenicness, to use for <a href="https://mapumental.com/">mapumental</a>. Now, the <a href="http://www.datasciencelab.co.uk">Data Science Lab</a> at <a href="http://www.wbs.ac.uk/">Warwick Business School</a> have taken over this website in order to research how scenicness impacts on human wellbeing.
			</p>
         </dd>
       <dt>How can I find out more about this scenicness research?</dt>
         <dd>
			<p>
            Here are the latest papers using the scenicness data:<br><br>

Seresinhe, C. I., Preis, T., Mackerron, G. &amp; Moat, H. S. (2019). Happiness is greater in more scenic locations. <i>Scientific Reports, 5</i>, 4498. <br>
<a href="https://www.nature.com/articles/s41598-019-40854-6">https://www.nature.com/articles/s41598-019-40854-6</a><br><br>

Seresinhe, C. I., Moat, H. S., &amp; Preis, T. (2018). Quantifying scenic areas using crowdsourced data. <i>Environment and Planning B: Urban Analytics and City Science, 45</i>, 567-582. <br>
<a href="https://journals.sagepub.com/doi/10.1177/0265813516687302">https://journals.sagepub.com/doi/10.1177/0265813516687302</a><br><br>

Seresinhe, C. I., Preis, T., &amp; Moat, H. S. (2017). Using deep learning to quantify the beauty of outdoor places. <i>Royal Society Open Science, 4</i>, 170170.<br>
<a href="https://rsos.royalsocietypublishing.org/content/4/7/170170">https://rsos.royalsocietypublishing.org/content/4/7/170170</a><br><br>

Seresinhe, C. I., Preis, T., &amp; Moat, H. S. (2015). Quantifying the impact of scenic environments on health. <i>Scientific Reports, 5</i>, 16899. <br>
<a href="https://www.nature.com/articles/srep16899">https://www.nature.com/articles/srep16899</a><br><br>

If you would like to stay updated on the latest developments on this research then feel free to get in touch with the <a href="https://datasciencelab.co.uk/contact-us">Data Science Lab</a> or follow us at <a href="https://twitter.com/thedatascilab">@thedatascilab</a>.
			</p>
         </dd>



         <dt>Can I download the data generated by this site?</dt>
         <dd>            
	    <p>Sure, we&rsquo;re happy to
            make the data available for other people to use under the <a href="http://opendatacommons.org/licenses/odbl/">Open Database Licence</a>.</p>

	    <p><a href="/votes.tsv">votes.tsv</a> is a <acronym title="tab separated value">TSV</acronym>
	    file of all photos that have been rated 3 times or more. The
	    columns are ID, latitude, longitude, average rating, population
	    variance, the votes (comma separated), and the Geograph URI for the
	    photo. The current file contains all the votes posted until February 2015.</p>
            
            <p>There are 217,000 images (one for each of nearly 95% of the 1km grid
            squares in Great Britain), and we&rsquo;re making sure each one is rated 3 times by
            different people, to help limit abuse, or the impact of people with
            terrible taste.</p>
         </dd>
   
         <!--<dt>What if a photo is unrepresentative of the scenicness of a grid square?</dt>
         <dd>
			<p>
            We plan on adding a different photo for each grid square, and
            hopefully that will help even out bad photos.
			</p>
         </dd>-->

         <dt>Who built it?</dt>
         <dd>
			<p>
            This site was originally built by <a href="https://www.dxw.com/">The 
            Dextrous Web (now Dextrous Digital)</a> for <a href="http://www.mysociety.org">mySociety</a>. It is now hosted by the <a href="http://datasciencelab.co.uk/">Data Science Lab</a> at <a href="http://www.wbs.ac.uk/">Warwick Business School</a>.
			</p>
         </dd>
               
         <dt>How do I get in touch?</dt>
		<p>
         <dd>Contact the <a href="https://datasciencelab.co.uk/contact-us">Data Science Lab</a>.</dd>
 <dd>Follow  <a href="https://twitter.com/thedatascilab">@thedatascilab</a>.</dd>
		</p>

      
      </dl>
   </div>
   <img src="assets/generic-bottom.jpg" alt="" />
</div>

<? foot(); ?>
