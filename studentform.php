<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													إضافة مستخدم جديد
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="post" action="adduser.php">
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-md-3">
													<label>
														الاسم الاول
													</label>
													<input type="text" name="firstname" class="form-control m-input" placeholder="الاسم الاول">
													<span class="m-form__help">
																يرجى ادخال الاسم الاول
 													</span>
												</div>
												<div class="col-md-3">
													<label>
														الاسم الثاني
													</label>
													<input type="text" name="secondname" class="form-control m-input" placeholder="الاسم الاول">
													<span class="m-form__help">
																يرجى ادخال الاسم الثاني
 													</span>
												</div>
												<div class="col-md-3">
													<label>
														الاسم الثالث
													</label>
													<input type="text" name="thirdname" class="form-control m-input" placeholder="الاسم الاول">
													<span class="m-form__help">
																يرجى ادخال الاسم الثالث
 													</span>
												</div>
												<div class="col-md-3">
													<label>
														الاسم اللقب
													</label>
													<input type="text" name="lastname" class="form-control m-input" placeholder="الاسم الاول">
													<span class="m-form__help">
																يرجى ادخال اللقب
 													</span>
												</div>

												<div class="col-lg-6">
													<label class="">
														National Number:
													</label>
													<input type="text" name="nationalno" class="form-control m-input" placeholder="الرقم الوطني">
													<span class="m-form__help">
														ادخل الرقم الوطني
													</span>
												</div>
											</div>

											<div class="form-group m-form__group row">

												<div class="col-lg-3">
													<label for="">
														Date Of Birth:
													</label>
													<input type="date" name="birthday" class="form-control m-input">
													<span class="m-form__help">
														أدخل تاريخ الميلاد
													</span>
												</div>

												<div class="col-lg-2">

												</div>

												<div class="col-lg-6">
													<label>
														Gender:
													</label>
													<div class="m-radio-inline">
														<label class="m-radio m-radio--solid">
															<input type="radio" name="gender" checked value="0">
																ذكر
															<span></span>
														</label>
														<label class="m-radio m-radio--solid">
															<input type="radio" name="gender" value="1">
																أنثى
															<span></span>
														</label>

													</div>
													<span class="m-form__help">
														Please select user gender
													</span>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Address:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" name="address" class="form-control m-input" placeholder="ادخل العنوان">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-map-marker"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														ادخل العنوان
													</span>
												</div>
												<div class="col-lg-6">
													<label class="">
														Postcode:
													</label>
												</div>
												<div class="col-lg-6">
													<label class="">
														Phone Number:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" name="phone" class="form-control m-input" placeholder="091-####### / 092-#######" title="09X-XXXXXXX" pattern="09[1-2]-[0-9]{7}">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-phone"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														أدخل رقم الهاتف
													</span>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Username:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" name="username" required class="form-control m-input" placeholder="إسم المستخدم">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-user"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														أدخل إسم المستخدم
													</span>
												</div>

												<div class="col-lg-6">
													<label class="">
														Email:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="email" name="email" required class="form-control m-input" placeholder="البريد الإلكتروني">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-mail"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														أدخل البريد الإلكتروني
													</span>
												</div>

												<div class="col-lg-6">
													<label class="">
														Password
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="password" name="password1" required class="form-control m-input" placeholder="كلمة المرور">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-password"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														أدخل كلمة المرور
													</span>
												</div>

												<div class="col-lg-6">
													<label class="">
														ReEnter Password
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="password" name="password2" required class="form-control m-input" placeholder="كلمة المرور مجدداً">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-password"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														أدخل كلمة المرور مجدداً
													</span>
												</div>
											</div>

											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														نوع المستخدم:
													</label>
													<div class="m-radio-inline">
														<label class="m-radio m-radio--solid">
															<input type="radio" name="usertype" checked value="1">
																طالب
															<span></span>
														</label>
														<label class="m-radio m-radio--solid">
															<input type="radio" name="usertype" value="2">
															 استاذ
															<span></span>
														</label>

														<label class="m-radio m-radio--solid">
															<input type="radio" name="usertype" value="3">
															 موظف
															<span></span>
														</label>
														<label class="m-radio m-radio--solid">
															<input type="radio" name="usertype" value="4">
															 ولي امر
															<span></span>
														</label>


													</div>
													<span class="m-form__help">
														Please select user group
													</span>
												</div>
											</div>



										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<button type="submit" class="btn btn-primary">
															حفظ
														</button>
														<button type="reset" class="btn btn-secondary">
															Cancel
														</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
