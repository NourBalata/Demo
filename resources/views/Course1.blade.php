

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/course.css')}}" />
</head>


  <body>
    <section class="teacher-selection">
      <div class="courses-container">
        <div class="content-wrapper">

          {{-- create header--}}
          
          @include('partiales/header')

          {{-- <aside class="logo-container">
            <div class="logo-wrapper">
              <img src="{{ asset('image/a4c524d9d863d3ca1788f72e021fa159e571794131f403cd8f8a6f496e22153d.png') }}" alt="Logo" class="logo" />
            </div>
          </aside> --}}
        </div>
        <div class="teacher-selection-content">
          <div class="teacher-selection-wrapper">
            <div class="teacher-list-container">
              <div class="teacher-list-header">
                <div class="teacher-list-title">
                  <h1 class="title-text">التسجيل في المسار</h1>
                  <div class="title-icon">
                    <img src="{{ asset('image/shar2.svg') }}" alt="Icon" class="title-icon-img" />
                  </div>
                </div>
                <div class="teacher-list">
                  <div class="progress-bar">
                    <div class="progress-step">
                      <div class="step-text">اختيار المدرس</div>
                      <div class="step-number">2</div>
                    </div>
                    <div class="progress-line"></div>
                    <div class="progress-step">
                      <div class="step-text">بيانات الخطة</div>
                      <div class="step-number">1</div>
                    </div>
                  </div>
                  <div class="teacher-cards-container">
                    <div class="teacher-cards-header">
                      <div class="filter-button">
                        <img src="{{ asset('image/love.svg') }}" alt="Filter" class="filter-icon" />
                      </div>
                      <div class="sort-button">
                        <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                      </div>
                    </div>
                    <div class="teacher-cards-wrapper">
                      <article class="teacher-card">
                        <img src="{{ asset('image/person.svg') }}" alt="Teacher" class="teacher-image" />
                        <div class="teacher-info">
                          <div class="teacher-name-bio">
                            <h3 class="teacher-name">محمد أحمد</h3>
                            <p class="teacher-bio">يمكن اضافة لمحة عن المدرس هنا حيث يمكن ان تكون سطر او سطرين بحيث لا تتجاوز اكثر حسب المسافرة المتوفرة لدينا</p>
                          </div>
                          <div class="teacher-details">
                            <p class="teacher-specialty">الاختصاص : الاسم هنا</p>
                            <p class="teacher-readings">القراءات : اسم 1 - اسم 2 - اسم 3</p>
                            <div class="teacher-rating">
                              <div class="star-rating">
                                <div class="star"></div>
                              </div>
                              <div class="star-rating">
                                <div class="star"></div>
                              </div>
                              <div class="star-rating">
                                <div class="star"></div>
                              </div>
                              <div class="star-rating">
                                <div class="star"></div>
                              </div>
                              <div class="star-rating">
                                <div class="star"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="heart-icon">
                          <div class="heart"></div>
                        </div>
                      </article>
                      <!-- Repeat the teacher-card structure for the remaining 5 cards -->
                    </div>
                  </div>
                  <div class="action-buttons">
                    <button class="save-plan-button">حفظ الخطة</button>
                    <button class="previous-button">السابق</button>
                  </div>
                </div>
              {{-- </div> --}}
            {{-- </div> --}}
            <nav class="sidebar">
              <div class="sidebar-content">
                <ul class="sidebar-menu">
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">لوحة التحكم</span>
                 
                  </li>
                  <li class="menu-item-active">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">المسارات</span>
                
                  </li>
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">الخطط</span>
                   
                  </li>
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">الجلسات</span>
                  
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">المعلمون</span>
                    
                  </li>
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">التقوييم</span>
                    
                  </li>
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">الباقات</span>
                  
                  </li>
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">سجل الدفع</span>
                   
                  </li>
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">عن صناعة القارئ</span>
                    
                  </li>
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">تواصل معنا</span>
                    
                  </li>
                  <li class="menu-item">
                    <img src="{{ asset('image/search.svg') }}" alt="Sort" class="sort-icon" />
                    <span class="menu-item-text">تسجيل الخروج</span>
                   
                  </li>
                </ul>
              </div>
            </nav> 
          </div>
        </div>
      </div>
    </section>
  </body>
  
 