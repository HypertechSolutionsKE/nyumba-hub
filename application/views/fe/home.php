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
                <div class="form-group"><span class="control-label">Location level 1</span>
                  <div class="dropdown dropdown--select">
                    <button type="button" data-toggle="dropdown" data-placeholder="States" class="dropdown-toggle js-select-checkboxes-btn">States</button>
                    <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                      <div class="region-select">
                        <ul class="js-checkboxes-tree bonsai region-select__list">
                          <li>
                            <input type="checkbox" name="location[]" value="Fresno" id="region-select-states-0" class="in-checkbox">
                            <label for="region-select-states-0" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Clovis" id="region-select-states-1" class="in-checkbox">
                                <label for="region-select-states-1" data-toggle="tooltip" data-placement="top" title="Clovis" class="in-label">Clovis</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Fresno" id="region-select-states-2" class="in-checkbox">
                                <label for="region-select-states-2" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-states-3" class="in-checkbox">
                            <label for="region-select-states-3" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Glendale" id="region-select-states-4" class="in-checkbox">
                                <label for="region-select-states-4" data-toggle="tooltip" data-placement="top" title="Glendale" class="in-label">Glendale</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Long Beach" id="region-select-states-5" class="in-checkbox">
                                <label for="region-select-states-5" data-toggle="tooltip" data-placement="top" title="Long Beach" class="in-label">Long Beach</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-states-6" class="in-checkbox">
                                <label for="region-select-states-6" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                <ul>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Bel Air" id="region-select-states-7" class="in-checkbox">
                                    <label for="region-select-states-7" data-toggle="tooltip" data-placement="top" title="Bel Air" class="in-label">Bel Air</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Brentwood" id="region-select-states-8" class="in-checkbox">
                                    <label for="region-select-states-8" data-toggle="tooltip" data-placement="top" title="Brentwood" class="in-label">Brentwood</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Holywood Hills" id="region-select-states-9" class="in-checkbox">
                                    <label for="region-select-states-9" data-toggle="tooltip" data-placement="top" title="Holywood Hills" class="in-label">Holywood Hills</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Mar Vista" id="region-select-states-10" class="in-checkbox">
                                    <label for="region-select-states-10" data-toggle="tooltip" data-placement="top" title="Mar Vista" class="in-label">Mar Vista</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Silver Lake" id="region-select-states-11" class="in-checkbox">
                                    <label for="region-select-states-11" data-toggle="tooltip" data-placement="top" title="Silver Lake" class="in-label">Silver Lake</label>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Santa Ana" id="region-select-states-12" class="in-checkbox">
                                <label for="region-select-states-12" data-toggle="tooltip" data-placement="top" title="Santa Ana" class="in-label">Santa Ana</label>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <input type="checkbox" name="location[]" value="Santa Clara" id="region-select-states-13" class="in-checkbox">
                            <label for="region-select-states-13" data-toggle="tooltip" data-placement="top" title="Santa Clara" class="in-label">Santa Clara</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Cupertino" id="region-select-states-14" class="in-checkbox">
                                <label for="region-select-states-14" data-toggle="tooltip" data-placement="top" title="Cupertino" class="in-label">Cupertino</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Mountain View" id="region-select-states-15" class="in-checkbox">
                                <label for="region-select-states-15" data-toggle="tooltip" data-placement="top" title="Mountain View" class="in-label">Mountain View</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Palo Alto" id="region-select-states-16" class="in-checkbox">
                                <label for="region-select-states-16" data-toggle="tooltip" data-placement="top" title="Palo Alto" class="in-label">Palo Alto</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="San Jose" id="region-select-states-17" class="in-checkbox">
                                <label for="region-select-states-17" data-toggle="tooltip" data-placement="top" title="San Jose" class="in-label">San Jose</label>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="region-select__buttons">
                          <button type="button" class="region-select__btn region-select__btn--reset js-select-checkboxes-reset">Clear</button>
                          <button type="button" class="region-select__btn js-select-checkboxes-accept">Accept</button>
                        </div>
                      </div>
                      <!-- end of block .region-select-->
                    </div>
                    <!-- end of block .dropdown-menu-->
                  </div>
                </div>
                <div class="form-group"><span class="control-label">Location level 2</span>
                  <div class="dropdown dropdown--select">
                    <button type="button" data-toggle="dropdown" data-placeholder="Location" class="dropdown-toggle js-select-checkboxes-btn">Locations</button>
                    <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                      <div class="region-select">
                        <ul class="js-checkboxes-tree bonsai region-select__list">
                          <li>
                            <input type="checkbox" name="location[]" value="Fresno" id="region-select-location-18" class="in-checkbox">
                            <label for="region-select-location-18" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Clovis" id="region-select-location-19" class="in-checkbox">
                                <label for="region-select-location-19" data-toggle="tooltip" data-placement="top" title="Clovis" class="in-label">Clovis</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Fresno" id="region-select-location-20" class="in-checkbox">
                                <label for="region-select-location-20" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-location-21" class="in-checkbox">
                            <label for="region-select-location-21" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Glendale" id="region-select-location-22" class="in-checkbox">
                                <label for="region-select-location-22" data-toggle="tooltip" data-placement="top" title="Glendale" class="in-label">Glendale</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Long Beach" id="region-select-location-23" class="in-checkbox">
                                <label for="region-select-location-23" data-toggle="tooltip" data-placement="top" title="Long Beach" class="in-label">Long Beach</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-location-24" class="in-checkbox">
                                <label for="region-select-location-24" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                <ul>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Bel Air" id="region-select-location-25" class="in-checkbox">
                                    <label for="region-select-location-25" data-toggle="tooltip" data-placement="top" title="Bel Air" class="in-label">Bel Air</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Brentwood" id="region-select-location-26" class="in-checkbox">
                                    <label for="region-select-location-26" data-toggle="tooltip" data-placement="top" title="Brentwood" class="in-label">Brentwood</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Holywood Hills" id="region-select-location-27" class="in-checkbox">
                                    <label for="region-select-location-27" data-toggle="tooltip" data-placement="top" title="Holywood Hills" class="in-label">Holywood Hills</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Mar Vista" id="region-select-location-28" class="in-checkbox">
                                    <label for="region-select-location-28" data-toggle="tooltip" data-placement="top" title="Mar Vista" class="in-label">Mar Vista</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Silver Lake" id="region-select-location-29" class="in-checkbox">
                                    <label for="region-select-location-29" data-toggle="tooltip" data-placement="top" title="Silver Lake" class="in-label">Silver Lake</label>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Santa Ana" id="region-select-location-30" class="in-checkbox">
                                <label for="region-select-location-30" data-toggle="tooltip" data-placement="top" title="Santa Ana" class="in-label">Santa Ana</label>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <input type="checkbox" name="location[]" value="Santa Clara" id="region-select-location-31" class="in-checkbox">
                            <label for="region-select-location-31" data-toggle="tooltip" data-placement="top" title="Santa Clara" class="in-label">Santa Clara</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Cupertino" id="region-select-location-32" class="in-checkbox">
                                <label for="region-select-location-32" data-toggle="tooltip" data-placement="top" title="Cupertino" class="in-label">Cupertino</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Mountain View" id="region-select-location-33" class="in-checkbox">
                                <label for="region-select-location-33" data-toggle="tooltip" data-placement="top" title="Mountain View" class="in-label">Mountain View</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Palo Alto" id="region-select-location-34" class="in-checkbox">
                                <label for="region-select-location-34" data-toggle="tooltip" data-placement="top" title="Palo Alto" class="in-label">Palo Alto</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="San Jose" id="region-select-location-35" class="in-checkbox">
                                <label for="region-select-location-35" data-toggle="tooltip" data-placement="top" title="San Jose" class="in-label">San Jose</label>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="region-select__buttons">
                          <button type="button" class="region-select__btn region-select__btn--reset js-select-checkboxes-reset">Clear</button>
                          <button type="button" class="region-select__btn js-select-checkboxes-accept">Accept</button>
                        </div>
                      </div>
                      <!-- end of block .region-select-->
                    </div>
                    <!-- end of block .dropdown-menu-->
                  </div>
                </div>
                <div class="form-group">
                  <label for="in-favorites-search-type" class="control-label">Favorite searches</label>
                  <select id="in-favorites-search-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>Kuala Lumpur - 1 flat</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="in-favorites-categories-type" class="control-label">Favorite categories</label>
                  <select id="in-favorites-categories-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>Luxury</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="in-favorites-users-type" class="control-label">Favourite users</label>
                  <select id="in-favorites-users-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>Josh Hartnett</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="in-datetime" class="control-label">Date Range</label>
                  <input type="text" id="in-datetime" data-start-date="12/03/2015" data-end-date="12/22/2015" data-time-picker="true" data-single-picker="false" class="js-datetimerange form-control">
                </div>
                <div class="form-group">
                  <div class="form__mode">
                    <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                  </div>
                  <label for="range_price" class="control-label">Price</label>
                  <div class="form__ranges">
                    <input id="range_price" class="js-search-range form__ranges-in">
                  </div>
                  <div class="form__inputs js-search-inputs">
                    <input type="text" id="in-price-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                    <input type="text" id="in-price-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form__mode">
                    <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                  </div>
                  <label for="range_area" class="control-label">Area</label>
                  <div class="form__ranges">
                    <input id="range_area" class="js-search-range form__ranges-in">
                  </div>
                  <div class="form__inputs js-search-inputs">
                    <input type="text" id="in-area-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                    <input type="text" id="in-area-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form__mode">
                    <button type="button" data-mode="percent" class="form__mode-btn js-input-commision">Percent</button>
                    <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                  </div>
                  <label for="range_area" class="control-label">Commision</label>
                  <div class="form__ranges">
                    <input id="range_commision" class="js-search-range form__ranges-in">
                  </div>
                  <div class="form__inputs js-search-inputs">
                    <input type="text" id="in-commision-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                    <input type="text" id="in-commision-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                  </div>
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
    <div class="widget js-widget">
      <div class="widget__content">
        <!-- BEGIN SUBSCRIBE-->
        <div class="subscribe">
          <form action="index.html#" class="subscribe__form js-subscribe-form">
            <h4 class="subscribe__title">Newsletters</h4>
            <div class="subscribe__group form-group">
              <label class="sr-only">Newsletters</label>
              <input type="email" placeholder="Input your e-mail" name="email" required data-parsley-trigger="change" class="subscribe__field form-control js-subscribe-email">
            </div>
            <button type="submit" class="btn--action subscribe__submit js-subscribe-submit">SUBMIT</button>
          </form>
          <!-- end of block .subscribe__form-->
        </div>
        <!-- END SUBSCRIBE-->
      </div>
    </div>
