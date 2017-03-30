<div class="site-wrap js-site-wrap">
    <div class="widget js-widget widget--landing widget--bg">
          <div class="widget__header">
            <h2 class="widget__title"><span class="title-thin">Find your</span> home</h2>
          </div>
          <div class="widget__content">
            <!-- BEGIN SEARCH-->
            <form action="properties_listing_list.html" class="form form--flex form--search js-search-form form--wide">
              <div class="row">
                <div class="form-group">
                  <label for="in-keyword" class="control-label">Keyword</label>
                  <input type="text" id="in-keyword" placeholder="Text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="in-contract-type" class="control-label">Listing Type</label>
                  <select id="in-contract-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>Sale</option>
                    <option>Rent</option>
                  </select>
                </div>
                <div class="form-group"><span class="control-label">Property type</span>
                  <div class="dropdown dropdown--select">
                    <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">---</button>
                    <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                      <ul>
                        <li>
                          <input id="checkbox_type_1" type="checkbox" name="checkbox_type_1" class="in-checkbox">
                          <label for="checkbox_type_1" data-toggle="tooltip" data-placement="left" title="Tooltip on top" class="in-label">Privat apartment</label>
                        </li>
                        <li>
                          <input id="checkbox_type_2" type="checkbox" name="checkbox_type_2" class="in-checkbox">
                          <label for="checkbox_type_2" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="in-label">Apartment</label>
                        </li>
                        <li>
                          <input id="checkbox_type_3" type="checkbox" name="checkbox_type_3" class="in-checkbox">
                          <label for="checkbox_type_3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                        </li>
                        <li>
                          <input id="checkbox_type_4" type="checkbox" name="checkbox_type_4" class="in-checkbox">
                          <label for="checkbox_type_4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                        </li>
                        <li>
                          <input id="checkbox_type_5" type="checkbox" name="checkbox_type_5" class="in-checkbox">
                          <label for="checkbox_type_5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">House</label>
                        </li>
                        <li>
                          <input id="checkbox_type_6" type="checkbox" name="checkbox_type_6" class="in-checkbox">
                          <label for="checkbox_type_6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                        </li>
                        <li>
                          <input id="checkbox_type_7" type="checkbox" name="checkbox_type_7" class="in-checkbox">
                          <label for="checkbox_type_7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                        </li>
                        <li>
                          <input id="checkbox_type_8" type="checkbox" name="checkbox_type_8" class="in-checkbox">
                          <label for="checkbox_type_8" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                        </li>
                        <li>
                          <input id="checkbox_type_9" type="checkbox" name="checkbox_type_9" class="in-checkbox">
                          <label for="checkbox_type_9" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                        </li>
                        <li>
                          <input id="checkbox_type_10" type="checkbox" name="checkbox_type_10" class="in-checkbox">
                          <label for="checkbox_type_10" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                        </li>
                      </ul>
                      <!-- end of block .dropdown-menu-->
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="in-tenure-type" class="control-label">Tenure</label>
                  <select id="in-tenure-type" data-placeholder="Any tenure" class="form-control">
                    <option label=" "></option>
                    <option>Tenure</option>
                    <option>Tenure</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="in-bedrooms-type" class="control-label">Bedrooms</label>
                  <select id="in-bedrooms-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="form__buttons form__buttons--double">
                  <button type="button" class="form__reset js-form-reset">Reset</button>
                  <button type="submit" class="form__submit">Search</button>
                </div>
              </div>
            </form>
            <!-- end of block-->
            <!-- END SEARCH-->
          </div>
    </div>
    <div class="widget js-widget widget--landing widget--gray">
      <div class="widget__header">
        <h2 class="widget__title"><span class="title-thin">Latest</span> Listing</h2>
        <h5 class="widget__headline">Our agents are licensed professionals that specialise in searching, evaluating and negotiating the purchase of property on behalf of the buyer. They will sell you real estate. Insights, tips & how-to guides on selling property and preparing your home or investment property for sale and working to maximise your sale price.</h5>
      </div>
      <div class="widget__content">
        <!-- BEGIN PROPERTIES INDEX-->
        <div class="listing listing--grid">
          <div class="listing__item">
            <div class="properties properties--grid">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/06.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span><span class="properties__intro">I needn't be afraid of them!' 'And who is to France Then turn not pale, beloved snail, but come a...</span><span class="properties__time">Added date: 12 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For rent</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 Martin Luther King</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> $550</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                      <div class="properties__offer-value"><strong>$2,255</strong><span class="properties__offer-period">/month</span>
                      </div>
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/07.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span><span class="properties__intro">My home is bright and spacious. Very good transport links. Close to the Olympic village, Westfiel...</span><span class="properties__time">Added date: 15 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For sale</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">401 South Sycamore Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> $790</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                      <div class="properties__offer-value"><strong>$6,218,780</strong>
                      </div>
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/08.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 61 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span><span class="properties__intro">I needn't be afraid of them!' 'And who is to France Then turn not pale, beloved snail, but come a...</span><span class="properties__time">Added date: 18 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For rent</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> 4%</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                      <div class="properties__offer-value"><strong>$3,100</strong><span class="properties__offer-period">/month</span>
                      </div>
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 61 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/09.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 35 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span><span class="properties__intro">It was all finished, the Owl, as a last resource, she put them into a pig,' Alice quietly said, j...</span><span class="properties__time">Added date: 2 days ago</span><span class="properties__more">View details</span>
                  </figure></a>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> 3%</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                      <div class="properties__offer-value"><strong>$23,351</strong>
                      </div>
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 35 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/10.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 164 Sq Ft</span><span class="properties__intro">Footman's head: it just grazed his nose, you know?' 'It's the oldest rule in the sea. But they HA...</span><span class="properties__time">Added date: 19 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For rent</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> 1%</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                      <div class="properties__offer-value"><strong>$2750</strong><span class="properties__offer-period">/month</span>
                      </div>
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 164 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/11.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 52 Sq Ft</span><span class="properties__params">Land Size - 123 Sq Ft</span><span class="properties__intro">I am so VERY wide, but she got to do,' said the Hatter. 'You MUST remember,' remarked the King, '...</span><span class="properties__time">Added date: 20 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For sale</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> $400</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                      <div class="properties__offer-value"><strong>$879,560</strong>
                      </div>
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 52 Sq Ft</span><span class="properties__params">Land Size - 123 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
        </div>
        <div class="widget__footer"><a href="properties_listing_list.html" class="widget__more">More listings</a></div>
        <!-- END PROPERTIES INDEX-->
      </div>
    </div>
    <div class="widget js-widget widget--landing">
      <div class="widget__header">
        <h2 class="widget__title"><span class="title-thin">Featured</span> Projects</h2>
        <h5 class="widget__headline">Our agents are licensed professionals that specialise in searching, evaluating and negotiating the purchase of property on behalf of the buyer. They will sell you real estate. Insights, tips & how-to guides on selling property and preparing your home or investment property for sale and working to maximise your sale price.</h5>
      </div>
      <div class="widget__content">
        <!-- BEGIN PROPERTIES INDEX-->
        <div class="listing listing--grid">
          <div class="listing__item">
            <div class="properties properties--grid properties--projects">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/06.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span><span class="properties__intro">I needn't be afraid of them!' 'And who is to France Then turn not pale, beloved snail, but come a...</span><span class="properties__time">Added date: 12 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For rent</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 Martin Luther King</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> $550</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid properties--projects">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/07.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span><span class="properties__intro">My home is bright and spacious. Very good transport links. Close to the Olympic village, Westfiel...</span><span class="properties__time">Added date: 15 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For sale</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">401 South Sycamore Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> $790</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid properties--projects">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/08.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 61 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span><span class="properties__intro">I needn't be afraid of them!' 'And who is to France Then turn not pale, beloved snail, but come a...</span><span class="properties__time">Added date: 18 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For rent</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> 4%</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 61 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid properties--projects">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/09.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 35 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span><span class="properties__intro">It was all finished, the Owl, as a last resource, she put them into a pig,' Alice quietly said, j...</span><span class="properties__time">Added date: 2 days ago</span><span class="properties__more">View details</span>
                  </figure></a>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> 3%</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 35 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid properties--projects">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/10.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 164 Sq Ft</span><span class="properties__intro">Footman's head: it just grazed his nose, you know?' 'It's the oldest rule in the sea. But they HA...</span><span class="properties__time">Added date: 19 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For rent</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> 1%</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 164 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
          <div class="listing__item">
            <div class="properties properties--grid properties--projects">
              <div class="properties__thumb"><a href="property_details.html" class="item-photo">
              <img src="<?php echo base_url();?>assets/fe/media-demo/properties/554x360/11.jpg" alt=""/>
                  <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 52 Sq Ft</span><span class="properties__params">Land Size - 123 Sq Ft</span><span class="properties__intro">I am so VERY wide, but she got to do,' said the Hatter. 'You MUST remember,' remarked the King, '...</span><span class="properties__time">Added date: 20 days ago</span><span class="properties__more">View details</span>
                  </figure></a><span class="properties__ribon">For sale</span>
              </div>
              <!-- end of block .properties__thumb-->
              <div class="properties__details">
                <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                  <div class="properties__offer">
                    <div class="properties__offer-column">
                      <div class="properties__offer-label">Commision</div>
                      <div class="properties__offer-value"><strong> $400</strong>
                      </div>
                    </div>
                    <div class="properties__offer-column">
                    </div>
                  </div>
                  <div class="properties__params--mob"><a href="index_projects.html#" class="properties__more">View details</a><span class="properties__params">Built-Up - 52 Sq Ft</span><span class="properties__params">Land Size - 123 Sq Ft</span></div>
                </div>
              </div>
              <!-- end of block .properties__info-->
            </div>
            <!-- end of block .properties__item-->
          </div>
        </div>
        <div class="widget__footer"><a href="properties_listing_list.html" class="widget__more">More listings</a></div>
        <!-- END PROPERTIES INDEX-->
      </div>
    </div>
     <!-- BEGIN AFTER CENTER SECTION-->
    <div class="widget js-widget widget--landing widget--gray">
        <div class="widget__header">
            <h2 class="widget__title"><span class="title-thin">Our</span> Partners</h2>
            <h5 class="widget__headline">At RS, our partners make great digital experiences possible by offering our products, consulting expertise and the products of our technology partners</h5>
        </div>
        <div class="widget__content">
            <!-- BEGIN PARTNERS-->
            <div id="partners-slider" class="partners">
                <div class="partners__slider js-slick-slider"><a class="partners__item">
          <img src="<?php echo base_url();?>assets/fe/media-demo/partners/logo-company-1.png" alt=""><span class="partners__name">Elite Construction Group, LLC</span></a><a class="partners__item">
          <img src="<?php echo base_url();?>assets/fe/media-demo/partners/logo-company-2.png" alt=""><span class="partners__name">Pro Era Limited</span></a><a class="partners__item">
          <img src="<?php echo base_url();?>assets/fe/media-demo/partners/logo-company-3.png" alt=""><span class="partners__name">Otdelka Real Estate LTD</span></a><a class="partners__item">
          <img src="<?php echo base_url();?>assets/fe/media-demo/partners/logo-company-4.png" alt=""><span class="partners__name">Fermer Realty Group</span></a><a class="partners__item">
          <img src="<?php echo base_url();?>assets/fe/media-demo/partners/logo-company-5.png" alt=""><span class="partners__name">Pro Era Limited</span></a><a class="partners__item">
          <img src="<?php echo base_url();?>assets/fe/media-demo/partners/logo-company-3.png" alt=""><span class="partners__name">Fermer Realty Group</span></a><a class="partners__item">
          <img src="<?php echo base_url();?>assets/fe/media-demo/partners/logo-company-2.png" alt=""><span class="partners__name">Otdelka Real Estate LTD</span></a>
                </div>
                <div class="partners__controls">
                    <button class="partners__arrow partners__arrow--prev js-partners-prev"></button>
                    <button class="partners__arrow partners__arrow--next js-partners-next"></button>
                </div>
                <!-- end of block .partners__controls-->
            </div>
            <!-- end of block .partners-->
        </div>
    </div>
    <!-- END PARTNERS-->
