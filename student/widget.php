<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-primary p-48">
												<i class="ti-cup"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Lecturers</div>
												<?php
                      $select_query = "select count(*) from lecturer";
                      $my_select = mysqli_query($mycon,$select_query);
                      while($data = mysqli_fetch_array($my_select)){

                        ?>
												<div class="stat-digit"><?php echo $data["count(*)"];?></div>
												<?php
					  }
					  ?>
											</div>

										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-warning p-48">
												<i class="ti-bag"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Ratings </div>
												<?php
                      $select_query = "select count(*) as cont from ratings";
                      $my_select = mysqli_query($mycon,$select_query);
                      while($data = mysqli_fetch_array($my_select)){

                        ?>
												<div class="stat-digit"><?php echo $data["cont"];?></div>
												<?php
					  }
					  ?>
											</div>

										</div>
									</div>
								</div>


								<div class="col-lg-6">
									<div class="card bg-success">
										<div class="stat-widget-six">
											<div class="stat-icon p-15">
												<i class="ti-stats-up"></i>
											</div>
											<div class="stat-content p-t-12 p-b-12">
											   <div class="text-left dib">
												<div class="stat-heading">Analysis</div>
												<div class="stat-text">get</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card bg-danger">
										<div class="stat-widget-six">
											<div class="stat-icon p-15">
												<i class="ti-stats-down"></i>
											</div>
											<div class="stat-content p-t-12 p-b-12">
											   <div class="text-left dib">
												<div class="stat-heading">Compare</div>
												<div class="stat-text">Joining</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /# column -->
                    </div>
