(function ($) {
   $(document).ready(function () {
      "use strict";
      //Global variable
      var wrgHomeUrl = wrg_data.home_url;
      var wrgOpenApiKey = wrg_data.wrg_open_api_key;
      var wrgSerpApiLogin = wrg_data.wrg_serp_api_login;
      var wrgSerpApiPassword = wrg_data.wrg_serp_api_password;
      var wrgAnalysisKeyword = "";

      /************************************************
       *         Widget Canvas open and close         *
       *************************************************/
      $(".wrg-editor-button").on("click", function () {
         $(".wrg-sidebar-footer").hide();
         $(".wrg-sidebar-area").toggleClass("opened");
         if ($(".wrg-sidebar-area").hasClass("opened")) {
            $(".wrg-sidebar-area").css("transform", "translateX(0)");
         } else {
            $(".wrg-sidebar-area").css("transform", "");
         }
      });

      $(".wrg-wc-editor-button").on("click", function () {
         $(".wrg-sidebar-footer").hide();
         $(".wrg-sidebar-area").toggleClass("opened");
         if ($(".wrg-sidebar-area").hasClass("opened")) {
            $(".wrg-sidebar-area").css("transform", "translateX(0)");
         } else {
            $(".wrg-sidebar-area").css("transform", "");
         }
      });

      $("#wpbody").on("click", ".wrg-gutenberg-button", function () {
         $(".wrg-sidebar-area").css("margin-top", "0");
         $(".wrg-sidebar-footer").hide();
         $(".wrg-sidebar-area").toggleClass("opened");
         if ($(".wrg-sidebar-area").hasClass("opened")) {
            $(".wrg-sidebar-area").css("transform", "translateX(0)");
         } else {
            $(".wrg-sidebar-area").css("transform", "");
         }
      });

      $(".wrg-sidebar-close-btn").on("click", function () {
         $(".wrg-sidebar-area").toggleClass("opened");
         if ($(".wrg-sidebar-area").hasClass("opened")) {
            $(".wrg-sidebar-area").css("transform", "translateX(0)");
         } else {
            $(".wrg-sidebar-area").css("transform", "");
         }
      });

      //nice select
      $(".wrg-select select").niceSelect();

      $(".wrg-quantity-minus").on("click", function () {
         var $input = $(this).parent().find("input");
         var count = parseInt($input.val()) - 1;
         count = count < 1 ? 1 : count;
         $input.val(count);
         $input.change();
         return false;
      });

      $(".wrg-quantity-plus").on("click", function () {
         var $input = $(this).parent().find("input");
         $input.val(parseInt($input.val()) + 1);
         $input.change();
         return false;
      });

      $(".wrg-quantity-minus-2").on("click", function () {
         var $input = $(this).parent().find("input");
         var count = parseInt($input.val()) - 1;
         count = count < 1 ? 1 : count;
         $input.val(count);
         $input.change();
         return false;
      });

      $(".wrg-quantity-plus-2").on("click", function () {
         var $input = $(this).parent().find("input");
         $input.val(parseInt($input.val()) + 1);
         $input.change();
         return false;
      });

      $(".wrg-keyword-analysis-show").on(
         "click",
         ".wrg-analysis-open-btn",
         function (e) {
            e.preventDefault();
            var $this = $(this);
            $this
               .closest(".wrg-analysis-item")
               .find(".wrg-analysis-info-wrapper")
               .slideToggle();
         }
      );

      $(".wrg-toggle-btn").each(function () {
         var $this = $(this);
         $this.find("label").on("click", function () {
            var attrVal = $this.find("input").attr("checked");
            if (attrVal == "checked") {
               $this.find("input").attr("checked", false);
               $this.find("span").removeClass("is-checked");
            } else {
               $this.find("input").attr("checked", "checked");
               $this.find("span").addClass("is-checked");
            }
         });
      });

      $(".wrg-toggle-switch-item").each(function () {
         var $this = $(this);
         $this.find("label").on("click", function () {
            var attrVal = $this.find("input").attr("checked");
            if (attrVal == "checked") {
               $this.find("input").attr("checked", false);
               $(this).removeClass("is-checked");
            } else {
               $this.find("input").attr("checked", "checked");
               $(this).addClass("is-checked");
            }
         });
      });

      // tabs
      if ($(".wrg-dashboard-area.tabs-box").length) {
         $(".wrg-dashboard-area.tabs-box .tab-buttons .tab-btn").on(
            "click",
            function (e) {
               e.preventDefault();
               var target = $($(this).attr("data-tab"));

               target
                  .parents(".tabs-box")
                  .find(".tab-buttons")
                  .find(".tab-btn")
                  .removeClass("active-btn");

               $(this).addClass("active-btn");

               target
                  .parents(".tabs-box")
                  .find(".tabs-content")
                  .find(".tab")
                  .fadeOut(0);
               target
                  .parents(".tabs-box")
                  .find(".tabs-content")
                  .find(".tab")
                  .removeClass("active-tab");
               $(target).fadeIn(300);
               $(target).addClass("active-tab");
            }
         );
      }

      //Toastify for dashboard
      function wrgShowToast(message) {
         var toast = $('<div class="wrg-toast"></div>').text(message);
         $("#wrg-toast-container").append(toast);
         toast
            .fadeIn(400)
            .delay(3000)
            .fadeOut(400, function () {
               $(this).remove();
            });
      }

      function wrgShowToastWidget(message) {
         var toast = $('<div class="wrg-toast"></div>').text(message);
         $("#wrg-widget-toast-container").append(toast);
         toast
            .fadeIn(400)
            .delay(3000)
            .fadeOut(400, function () {
               $(this).remove();
            });
      }

      /************************************************
       *            Widget Canvas Condition            *
       *************************************************/
      $(".wrg-sidebar-cancel-btn").on("click", function () {
         $(".wrg-sidebar-main-content").fadeOut("slow", function () {
            $(".wrg-all-widget-canvas").show();
            $(".wrg-all-widget-canvas .wrg-sidebar-content").show();
            $(".wrg-widget-blog-footer").addClass("footer-hide");
            $(".wrg-widget-woocommerce-footer").addClass("footer-hide");
         });
         $(".wrg-sidebar-area").scrollTop(0);
      });

      $("#wrg-blog-widget").on("click", function () {
         if (!$(this).hasClass("wrg-post-widget")) {
            $(".wrg-all-widget-canvas").fadeOut("slow", function () {
               $(".wrg-blog-widget-canvas").fadeIn("slow");
               $(".wrg-widget-woocommerce-footer").addClass("footer-hide");
               $(".wrg-widget-blog-footer").removeClass("footer-hide");
            });
            $(".wrg-sidebar-area").scrollTop(0);
         }
      });

      $("#wrg-woocommerce-widget").on("click", function () {
         if (!$(this).hasClass("wrg-product-widget")) {
            $(".wrg-all-widget-canvas").fadeOut("slow", function () {
               $(".wrg-woocommerce-widget-canvas").fadeIn("slow");
               $(".wrg-woocommerce-widget-canvas .wrg-sidebar-content").fadeIn(
                  "slow"
               );
               $(".wrg-widget-blog-footer").addClass("footer-hide");
               $(".wrg-widget-woocommerce-footer").removeClass("footer-hide");
            });
            $(".wrg-sidebar-area").scrollTop(0);
         }
      });

      $("#wrg-writegen-mode-widget").on("click", function () {
         $(".wrg-all-widget-canvas").fadeOut("slow", function () {
            $(".wrg-writegen-mode-canvas").fadeIn("slow");
         });
         $(".wrg-sidebar-area").scrollTop(0);
      });

      $("#wrg-blog-content-widget").on("click", function () {
         if (!$(this).hasClass("wrg-post-widget")) {
             $(".wrg-all-widget-canvas").fadeOut("medium", function () {
                 $(".wrg-blog-content-canvas").fadeIn("medium");
             });
             $(".wrg-sidebar-area").scrollTop(0);
         }
     });
     
     $("#wrg-blog-outline-widget").on("click", function () {
      if (!$(this).hasClass("wrg-post-widget")) {
          $(".wrg-all-widget-canvas").fadeOut("medium", function () {
              $(".wrg-blog-outlines-canvas").fadeIn("medium");
          });
          $(".wrg-sidebar-area").scrollTop(0);
      }
  });
  

  $("#wrg-blog-tags-widget").on("click", function () {
   if (!$(this).hasClass("wrg-post-widget")) {
       $(".wrg-all-widget-canvas").fadeOut("medium", function () {
           $(".wrg-blog-tags-canvas").fadeIn("medium");
       });
       $(".wrg-sidebar-area").scrollTop(0);
   }
});


$("#wrg-blog-rewrite-widget").on("click", function () {
   if (!$(this).hasClass("wrg-post-widget")) {
       $(".wrg-all-widget-canvas").fadeOut("medium", function () {
           $(".wrg-blogrewrite-canvas").fadeIn("medium");
       });
       $(".wrg-sidebar-area").scrollTop(0);
   }
});


$("#wrg-blog-brief-widget").on("click", function () {
   if (!$(this).hasClass("wrg-post-widget")) {
       $(".wrg-all-widget-canvas").fadeOut("medium", function () {
           $(".wrg-blog-brief-canvas").fadeIn("medium");
       });
       $(".wrg-sidebar-area").scrollTop(0);
   }
});


$("#wrg-blog-prg-compression-widget").on("click", function () {
   if (!$(this).hasClass("wrg-post-widget")) {
       $(".wrg-all-widget-canvas").fadeOut("medium", function () {
           $(".wrg-paragraph-compression-canvas").fadeIn("medium");
       });
       $(".wrg-sidebar-area").scrollTop(0);
   }
});


      $("#wrg-blog-related-keywords-widget").on("click", function () {
         $(".wrg-all-widget-canvas").fadeOut("medium", function () {
            $(".wrg-related-tags-canvas").fadeIn("medium");
         });
         $(".wrg-sidebar-area").scrollTop(0);
      });

      $("#wrg-blog-find-question-widget").on("click", function () {
         $(".wrg-all-widget-canvas").fadeOut("medium", function () {
            $(".wrg-find-question-canvas").fadeIn("medium");
         });
         $(".wrg-sidebar-area").scrollTop(0);
      });

      $("#wrg-blog-short-story-widget").on("click", function () {
         $(".wrg-all-widget-canvas").fadeOut("medium", function () {
            $(".wrg-short-story-canvas").fadeIn("medium");
         });
         $(".wrg-sidebar-area").scrollTop(0);
      });

      $("#wrg-product-title-widget").on("click", function () {
         if (!$(this).hasClass("wrg-product-widget")) {
            $(".wrg-all-widget-canvas").fadeOut("medium", function () {
               $(".wrg-product-title-canvas").fadeIn("medium");
            });
            $(".wrg-sidebar-area").scrollTop(0);
         }
      });

      $("#wrg-product-long-des-widget").on("click", function () {
         if (!$(this).hasClass("wrg-product-widget")) {
            $(".wrg-all-widget-canvas").fadeOut("medium", function () {
               $(".wrg-product-long-desc-canvas").fadeIn("medium");
            });
            $(".wrg-sidebar-area").scrollTop(0);
         }
      });

      $("#wrg-product-short-des-widget").on("click", function () {
         if (!$(this).hasClass("wrg-product-widget")) {
            $(".wrg-all-widget-canvas").fadeOut("medium", function () {
               $(".wrg-product-short-desc-canvas").fadeIn("medium");
            });
            $(".wrg-sidebar-area").scrollTop(0);
         }
      });

      $("#wrg-blog-title-widget").on("click", function () {
         if (!$(this).hasClass("wrg-post-widget")) {
             $(".wrg-all-widget-canvas").fadeOut("medium", function () {
                 $(".wrg-blog-title-canvas").fadeIn("medium");
             });
             $(".wrg-sidebar-area").scrollTop(0);
         }
     });
     

      //content copy
      $(".wrg-analysis-wrapper").on("click", ".wrg-copy-content", function () {
         $(".wrg-copy-done").hide();
         $(this).hide();
         $(this).siblings(".wrg-copy-done").show();
         var listItem = $(this).closest(".wrg-analysis-item");

         var generatedTags = listItem.find(".wrg-generated-tags");

         if (generatedTags.length > 0) {
            var tags = generatedTags
               .find("span")
               .map(function () {
                  return $(this).text();
               })
               .get()
               .join(", ");

            // Create a temporary input element
            var tempInput = $("<input>");

            // Set the input value to the tags content
            tempInput.val(tags);

            // Append the input element to the body
            $("body").append(tempInput);

            // Select the input content
            tempInput.select();

            // Copy the selected text to the clipboard
            document.execCommand("copy");

            // Remove the temporary input element
            tempInput.remove();
         } else {
            var text = listItem.find(".wrg-analysis-desc p").text();
            // Create a temporary input element
            var tempInput = $("<input>");

            // Set the input value to the text content
            tempInput.val(text);

            // Append the input element to the body
            $("body").append(tempInput);

            // Select the input content
            tempInput.select();

            // Copy the selected text to the clipboard
            document.execCommand("copy");

            // Remove the temporary input element
            tempInput.remove();
         }
      });

      /************************************************
       *          Selected widget hide and show        *
       *************************************************/
      $(
         "#wrg-writegen-mode-widget-selector,#wrg-blog-brief-widget-selector,#wrg-blog-content-widget-selector,#wrg-blog-outlines-widget-selector,#wrg-blog-rewrite-widget-selector,#wrg-blog-tags-widget-selector,#wrg-blog-title-widget-selector,#wrg-find-question-widget-selector,#wrg-paragraph-compression-widget-selector,#wrg-product-long-desc-widget-selector,#wrg-product-short-widget-selector,#wrg-product-title-widget-selector,#wrg-related-tags-widget-selector,#wrg-short-story-widget-selector"
      ).on("change", function () {
         var selectedWidget = $(this).val();
         // Hide all widgets
         $(".wrg-sidebar-content").hide();
         if (selectedWidget == "wrg-blog-widget-canvas") {
            $(".wrg-blog-widget-canvas").show();
            $(".wrg-blog-widget-canvas .wrg-sidebar-content").show();
            $(".wrg-widget-blog-footer").removeClass("footer-hide");
         } else if (selectedWidget == "wrg-woocommerce-widget-canvas") {
            $(".wrg-woocommerce-widget-canvas").show();
            $(".wrg-woocommerce-widget-canvas .wrg-sidebar-content").show();
            $(".wrg-widget-woocommerce-footer").removeClass("footer-hide");
         } else {
            // Show the selected widget
            $("." + selectedWidget).show();
         }
      });

      /************************************************
       *           Blog Widget Condition               *
       *************************************************/
      function wrgHandleInput(inputElement, generateButton) {
         inputElement.on("input", function () {
            var inputValue = $(this).val();
            if (inputValue) {
               generateButton.addClass("wrg-btn-big-border");
            } else {
               generateButton.removeClass("wrg-btn-big-border");
            }
         });
      }

      wrgHandleInput(
         $(".wrg-search-keywords"),
         $(".wrg-generate-analysis-keyword")
      );
      wrgHandleInput($(".wrg-search-keywords"), $(".wrg-generate-title"));
      wrgHandleInput($(".wrg-meta-des-title"), $(".wrg-generate-meta-des-btn"));
      wrgHandleInput($(".wrg-content-title"), $(".wrg-generate-content-btn"));
      wrgHandleInput($(".wrg-product-name"), $(".wrg-product-title-generate"));
      wrgHandleInput(
         $(".wrg-product-long-title"),
         $(".wrg-generate-long-des-btn")
      );
      wrgHandleInput(
         $(".wrg-product-short-title"),
         $(".wrg-generate-short-des-btn")
      );
      wrgHandleInput($(".wrg-writegen-content"), $(".wrg-writegen-mode-btn"));
      wrgHandleInput(
         $(".wrg-single-blog-keywords"),
         $(".wrg-single-blog-title-btn")
      );
      wrgHandleInput($(".wrg-blog-conten-title"), $(".wrg-blog-content-btn"));
      wrgHandleInput(
         $(".wrg-blog-outlines-title"),
         $(".wrg-blog-outlines-btn")
      );
      wrgHandleInput($(".wrg-blog-tags-title"), $(".wrg-blog-tags-btn"));
      wrgHandleInput($(".wrg-blogrewrite-content"), $(".wrg-blogrewrite-btn"));
      wrgHandleInput($(".wrg-blog-brief-content"), $(".wrg-blog-brief-btn"));
      wrgHandleInput(
         $(".wrg-paragraph-compression-content"),
         $(".wrg-paragraph-compression-btn")
      );
      wrgHandleInput(
         $(".wrg-related-tags-content"),
         $(".wrg-related-tags-btn")
      );
      wrgHandleInput(
         $(".wrg-find-question-content"),
         $(".wrg-find-question-btn")
      );
      wrgHandleInput($(".wrg-short-story-content"), $(".wrg-short-story-btn"));
      wrgHandleInput(
         $(".wrg-single-product-title"),
         $(".wrg-single-product-title-btn")
      );
      wrgHandleInput(
         $(".wrg-single-product-long-desc-title"),
         $(".wrg-single-product-long-desc-btn")
      );
      wrgHandleInput(
         $(".wrg-single-product-short-desc-title"),
         $(".wrg-single-product-short-desc-btn")
      );

      $(".wrg-sidebar-footer-btn.wrg-sidebar-next-btn").on(
         "click",
         function () {
            if ($(".wrg-meta-description").hasClass("active")) {
               var inputValue = $(".wrg-content-title").val();
               var elementToChange = $(".wrg-generate-content-btn");

               if (inputValue) {
                  elementToChange.css("border-color", "blue");
               } else {
                  elementToChange.css("border-color", ""); // Reset border color if input is empty
               }

               $(".wrg-content-title").on("input", function () {
                  var inputValue = $(this).val();
                  var elementToChange = $(".wrg-generate-content-btn");

                  if (inputValue) {
                     elementToChange.css("border-color", "blue");
                  } else {
                     elementToChange.css("border-color", ""); // Reset border color if input is empty
                  }
               });
            }
         }
      );

      //blog item value insert next title box
      $(".wrg-title-item-show").on("click", ".wrg-analysis-item", function () {
         var titleText = $(this).find(".wrg-analysis-desc p").text();
         $(".wrg-meta-des-title").val(titleText);
         $(".wrg-content-title").val(titleText);
         $(".wrg-analysis-item").removeClass("selected");
         $(this).addClass("selected");
      });

      //Get selected keyword value and set in global variable
      $(".wrg-keyword-analysis-show").on(
         "click",
         ".wrg-analysis-item",
         function () {
            var titleText = $(this).find(".wrg-analysis-desc p").text();
            wrgAnalysisKeyword = titleText; // Store the title in the global variable
            $(".wrg-meta-des-title").val(titleText);
            $(".wrg-analysis-item").removeClass("selected");
            $(this).addClass("selected");
         }
      );

      //woocommerce item value insert next title box
      $(".wrg-product-title-item-show").on(
         "click",
         ".wrg-analysis-item",
         function () {
            var titleText = $(this).find(".wrg-analysis-desc p").text();
            $(".wrg-product-long-title").val(titleText);
            $(".wrg-product-short-title").val(titleText);
            $(".wrg-analysis-item").removeClass("selected"); // Remove 'selected' class from all items
            $(this).addClass("selected"); // Add 'selected' class to the clicked item
         }
      );

      // blog title selected value
      $(".wrg-meta-description-item-show").on(
         "click",
         ".wrg-analysis-item",
         function () {
            var titleText = $(".wrg-meta-des-title").val();
            var metaDescription = $(this).find(".wrg-analysis-desc p").text();
            $(".wrg-content-title").val(titleText);
            $(".wrg-content-metades").val(metaDescription);
            $(".wrg-analysis-item").removeClass("selected");
            $(this).addClass("selected");
         }
      );

      // Error handle function
      function wrgShowError(message) {
         $(".wrg-api-error").show();
         $(".wrg-api-error span").text(message);
      }

      /**********************************************
       *              Blog Widget                    *
       **********************************************/
      // Analysis keywords generate
      $(".wrg-generate-analysis-keyword").on("click", function () {
         if ($(".wrg-blog-title").hasClass("active")) {
            if (wrgAnalysisKeyword) {
               var searchKeywords = wrgAnalysisKeyword;
            } else {
               var searchKeywords = $(".wrg-search-keywords").val();
            }
            var selectedLanguage = $(
               ".wrg-select-analysis-keywords-language"
            ).val();
            var keywordMaxResult = $(".wrg-analysis-keywords-number").val();

            var credentials = wrgSerpApiLogin + ":" + wrgSerpApiPassword;
            var encodedCredentials = btoa(credentials);
            // Get the current year
            var currentYear = new Date().getFullYear();
            // Create a date string in the format "YYYY-MM-DD" with the same date (January 1st)
            var currentDate = currentYear + "-01-01";

            var promptText =
               "Generate " + keywordMaxResult + " SEO-friendly related keyword";
            promptText += " about " + searchKeywords;
            promptText += " in " + selectedLanguage + " language\n";

            //Check if wrgOpenApiKey and input value is Not Empty
            if (!wrgOpenApiKey || !searchKeywords) {
               wrgShowError(
                  !wrgOpenApiKey
                     ? "Please insert your open API key from settings."
                     : "Please fill up requered input field."
               );
               return;
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrgOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrg-loader-container").show();
                  $(".wrg-api-error").hide();
               },
               success: function (response) {
                  var generatedContent = response.choices[0].text;
                  var titleArray = generatedContent
                     .split(/\d+\.\s/)
                     .filter(Boolean)
                     .map(function (title) {
                        return title.trim();
                     });
                  // Merge the titleArray into a single array with comma-separated keywords
                  var mergedKeywords = [searchKeywords, ...titleArray].filter(
                     Boolean
                  );

                  $.ajax({
                     type: "POST",
                     url: "https://api.dataforseo.com/v3/keywords_data/google_ads/search_volume/live",
                     timeout: 0,
                     headers: {
                        "Content-Type": "application/json",
                        Authorization: "Basic " + encodedCredentials,
                     },
                     data: JSON.stringify([
                        {
                           language_code: "en",
                           keywords: mergedKeywords,
                           date_from: currentDate,
                        },
                     ]),
                     success: function (response) {
                        // Assuming the given object is named "response"
                        var resultArray = response.tasks[0].result;
                        if (resultArray !== null) {
                           var charts = [];
                           resultArray.map(function (keywordData, index) {
                              var keyword = keywordData.keyword;
                              var competition = keywordData.competition;
                              var cpc = keywordData.low_top_of_page_bid;
                              var searchVolume = keywordData.search_volume;
                              var monthlySearch = keywordData.monthly_searches;
                              var searchVolumeArray = monthlySearch.map(
                                 (item) => item.search_volume
                              );
                              var chartId = "chart" + (index + 1);
                              // Array of month names
                              var monthNames = [
                                 "Jan",
                                 "Feb",
                                 "Mar",
                                 "Apr",
                                 "May",
                                 "Jun",
                                 "Jul",
                                 "Aug",
                                 "Sep",
                                 "Oct",
                                 "Nov",
                                 "Dec",
                              ];

                              // Extracting month names from data
                              var monthArray = monthlySearch.map(
                                 (item) => monthNames[item.month - 1]
                              );
                              // chart js
                              var ChartOptions = {
                                 series: [
                                    {
                                       name: "Users",
                                       data: searchVolumeArray,
                                    },
                                 ],
                                 chart: {
                                    type: "bar",
                                    height: 350,
                                 },
                                 plotOptions: {
                                    bar: {
                                       horizontal: false,
                                       columnWidth: "55%",
                                       endingShape: "rounded",
                                       distributed: false,
                                    },
                                 },
                                 dataLabels: {
                                    enabled: false,
                                 },
                                 legend: {
                                    show: false,
                                 },
                                 stroke: {
                                    show: false,
                                    width: 2,
                                    colors: ["transparent"],
                                 },
                                 colors: ["#D0D1FF"],
                                 xaxis: {
                                    categories: monthArray,
                                 },
                                 yaxis: {
                                    show: false,
                                 },
                                 fill: {
                                    opacity: 1,
                                 },
                                 tooltip: {
                                    theme: "dark",
                                    y: {
                                       formatter: function (val) {
                                          return val + "";
                                       },
                                    },
                                 },
                              };

                              var blogItem = `
                            <div class="wrg-analysis-item">
                                <h3 class="wrg-analysis-title">Draft ${
                                   index + 1
                                }</h3>
                                <div class="wrg-analysis-content">
                                <div class="wrg-analysis-desc">
                                    <p>${keyword}</p>
                                </div>
                                <div class="wrg-analysis-meta-wrapper wrg-d-flex wrg-justify-content-between">
                                    <div class="wrg-analysis-meta">
                                    <span class="wrg-badge wrg-badge-success">CPC: $${cpc}</span>
                                    <span class="wrg-badge wrg-badge-danger">Competition: ${competition}</span>
                                    </div>
                                    <div class="wrg-analysis-action">
                                    <button class="wrg-analysis-action-btn wrg-analysis-open-btn">Analysis 
                                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class="wrg-analysis-info-wrapper" style="display: none;">
                                <div class="wrg-container">
                                    <div class="wrg-row">
                                    <h3 class="wrg-analysis-info-sec-title">Keyword Analysis</h3>
                                    </div>
                                </div>
                                <div class="wrg-container">
                                                <div class="wrg-row wrg-gx-4">
                                                    <div class="wrg-col-4">
                                                    <div class="wrg-analysis-info-item">
                                                        <div class="wrg-analysis-info-bg"></div>
                                                        <div class="wrg-analysis-info-icon">
                                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6.77777 12.5555C9.96874 12.5555 12.5555 9.96874 12.5555 6.77777C12.5555 3.5868 9.96874 1 6.77777 1C3.5868 1 1 3.5868 1 6.77777C1 9.96874 3.5868 12.5555 6.77777 12.5555Z" stroke="currentColor" stroke-opacity="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M14.0001 14L10.8584 10.8583" stroke="currentColor" stroke-opacity="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                        <h3 class="wrg-analysis-info-title">Search</h3>
                                                        <span class="wrg-analysis-info-number">${searchVolume}</span></span>
                                                    </div>
                                                    </div>
                                                    <div class="wrg-col-4">
                                                    <div class="wrg-analysis-info-item wrg-analysis-info-success">
                                                        <div class="wrg-analysis-info-bg"></div>
                                                        <div class="wrg-analysis-info-icon">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.49988 5.00006V4.00006H7.49988V2.50006H6.49988V4.00006H5.49988C5.23474 4.00033 4.98054 4.10577 4.79306 4.29325C4.60558 4.48073 4.50014 4.73493 4.49988 5.00006V6.50006C4.50014 6.7652 4.60558 7.0194 4.79306 7.20687C4.98054 7.39435 5.23474 7.49979 5.49988 7.50006H8.49988V9.00006H4.49988V10.0001H6.49988V11.5001H7.49988V10.0001H8.49988C8.765 9.99975 9.01918 9.8943 9.20665 9.70683C9.39412 9.51936 9.49957 9.26518 9.49988 9.00006V7.50006C9.49961 7.23492 9.39417 6.98072 9.20669 6.79325C9.01921 6.60577 8.76501 6.50032 8.49988 6.50006H5.49988V5.00006H9.49988Z" fill="currentColor" fill-opacity="0.4"/>
                                                                <path d="M7 1C8.18669 1 9.34673 1.35189 10.3334 2.01118C11.3201 2.67047 12.0892 3.60754 12.5433 4.7039C12.9974 5.80025 13.1162 7.00665 12.8847 8.17054C12.6532 9.33443 12.0818 10.4035 11.2426 11.2426C10.4035 12.0818 9.33443 12.6532 8.17054 12.8847C7.00666 13.1162 5.80026 12.9974 4.7039 12.5433C3.60755 12.0891 2.67047 11.3201 2.01118 10.3334C1.3519 9.34673 1 8.18669 1 7C1.00466 5.41013 1.6383 3.88671 2.76251 2.7625C3.88672 1.63829 5.41014 1.00466 7 1ZM7 0C5.61553 0 4.26215 0.410543 3.11101 1.17971C1.95987 1.94888 1.06266 3.04213 0.532846 4.32122C0.00303298 5.6003 -0.13559 7.00776 0.134506 8.36563C0.404603 9.7235 1.07129 10.9708 2.05026 11.9497C3.02922 12.9287 4.2765 13.5954 5.63437 13.8655C6.99224 14.1356 8.3997 13.997 9.67879 13.4672C10.9579 12.9373 12.0511 12.0401 12.8203 10.889C13.5895 9.73785 14 8.38447 14 7C13.9946 5.14515 13.2553 3.36783 11.9437 2.05626C10.6322 0.744678 8.85485 0.00543459 7 0Z" fill="currentColor" fill-opacity="0.4"/>
                                                            </svg>
                                                        </div>
                                                        <h3 class="wrg-analysis-info-title">CPC:</h3>
                                                        <span class="wrg-analysis-info-number"><span>$</span>${cpc}</span>
                                                    </div>
                                                    </div>
                                                    <div class="wrg-col-4">
                                                    <div class="wrg-analysis-info-item wrg-analysis-info-danger">
                                                        <div class="wrg-analysis-info-bg"></div>
                                                        <div class="wrg-analysis-info-icon">
                                                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0.928571 0H0V12.0714C0 12.3177 0.0978313 12.5539 0.271972 12.728C0.446113 12.9022 0.682299 13 0.928571 13H13V12.0714H0.928571V0Z" fill="currentColor" fill-opacity="0.4"/>
                                                                <path d="M13 3.25H9.75004V4.17857H11.4168L7.89289 7.7025L5.90111 5.70607C5.85794 5.66255 5.80659 5.62801 5.75002 5.60444C5.69344 5.58087 5.63275 5.56874 5.57146 5.56874C5.51017 5.56874 5.44949 5.58087 5.39291 5.60444C5.33633 5.62801 5.28498 5.66255 5.24182 5.70607L1.85718 9.09536L2.51182 9.75L5.57146 6.69036L7.56325 8.68679C7.60641 8.7303 7.65776 8.76484 7.71434 8.78841C7.77092 8.81199 7.8316 8.82412 7.89289 8.82412C7.95418 8.82412 8.01487 8.81199 8.07145 8.78841C8.12802 8.76484 8.17937 8.7303 8.22253 8.68679L12.0715 4.83321V6.5H13V3.25Z" fill="currentColor" fill-opacity="0.4"/>
                                                            </svg>
                                                        </div>
                                                        <h3 class="wrg-analysis-info-title">Competition</h3>
                                                        <span class="wrg-analysis-info-number">${competition}</span>
                                                    </div>
                                                    </div>
                                                </div> <!-- row -->
                                                <div class="wrg-row">
                                                    <div class="wrg-col-12">
                                                    <div class="wrg-analysis-chart">
                                                        <h3 class="wrg-analysis-chart-title">Bar Charts</h3>
                
                                                        <div class="wrg-analysis-chart-content">
                                                            <div id="${chartId}"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div> <!-- container -->
                                <!-- Rest of the HTML code for keyword analysis section -->
                                </div>
                            </div>
                            `;
                              $(".wrg-keyword-analysis-show").append(blogItem);
                              // Create chart instance and store in the array
                              var chart = new ApexCharts(
                                 document.querySelector(
                                    `.wrg-keyword-analysis-show #${chartId}`
                                 ),
                                 ChartOptions
                              );
                              charts.push(chart);
                              // Render all charts in the array
                              charts.forEach(function (chart) {
                                 chart.render();
                              });
                           });
                        } else {
                           $(".wrg-loader-container").hide();
                           $(".wrg-api-error").show();
                           $(".wrg-api-error span").text(
                              "Please check your api usages and limitation."
                           );
                        }
                     },
                     error: function (error) {
                        $(".wrg-loader-container").hide();
                        $(".wrg-api-error").show();
                        $(".wrg-api-error span").text(
                           "Please check your api usages and limitation."
                        );
                     },
                  });
               },
               error: function (error) {},
               complete: function () {
                  $(".wrg-loader-container").hide();
               },
            });
         }
      });

      // Blog Title generate
      $(".wrg-generate-title").on("click", function () {
         if ($(".wrg-blog-title").hasClass("active")) {
            var searchKeywords = $(".wrg-search-keywords").val();
            var context = $(".wrg-context").val();
            var selectedLanguage = $(".wrg-select-language").val();
            var selectedTone = $(".wrg-select-tone").val();
            var selectedWritingStyle = $(".wrg-select-writing-style").val();
            var titleMaxResult = $(".wrg-quantity-title").val();

            var promptText = "Generate SEO-friendly blog titles";
            if (searchKeywords && context) {
               promptText +=
                  " related to " + searchKeywords + " and " + context;
            } else if (searchKeywords) {
               promptText += " about " + searchKeywords;
            } else if (context) {
               promptText += " on " + context;
            }
            promptText +=
               " in " +
               selectedLanguage +
               " language with a " +
               selectedTone +
               " tone and " +
               selectedWritingStyle +
               " writing style:\n";

            for (var i = 1; i <= titleMaxResult; i++) {
               promptText += i + ". \n";
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrgOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
                  n: 3,
               }),
               beforeSend: function () {
                  $(".wrg-loader-container").show();
                  $(".wrg-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedTitles = response.choices[0].text
                     .split("\n")
                     .slice(1, titleMaxResult + 1)
                     .map(function (title) {
                        return title.replace(/"/g, ""); // Remove all double quotation marks
                     });
                  generatedTitles.forEach(function (title, index) {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                        <div class="wrg-analysis-item">
                        <h3 class="wrg-analysis-title">Draft ${index + 1}</h3>
                        <div class="wrg-analysis-content">
                            <div class="wrg-analysis-desc">
                            <p>${cleanedTitle}</p>
                            </div>
                        </div>
                        </div>`;
                     $(".wrg-title-item-show").append(blogItem);
                  });
               },
               error: function (error) {
                  $(".wrg-loader-container").hide();
                  $(".wrg-api-error").show();
                  $(".wrg-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrg-loader-container").hide();
               },
            });
         }
      });

      //generate meta description
      $(".wrg-generate-meta-des-btn").on("click", function () {
         if ($(".wrg-blog-meta-description").hasClass("active")) {
            var titleText = $(".wrg-meta-des-title").val();
            var focusKeyword = $(".wrg-meta-des-focus-keyword").val();
            var numberOfTitles = $(".wrg-blog-metadesch-number").val();
            var promptText = "Generate SEO-friendly meta descriptions";

            if (titleText && focusKeyword) {
               promptText +=
                  " for " + titleText + " with a focus on " + focusKeyword;
            } else if (titleText) {
               promptText += " for " + titleText;
            } else if (focusKeyword) {
               promptText += " related to " + focusKeyword;
            }

            promptText += ":\n";

            for (var i = 1; i <= numberOfTitles; i++) {
               promptText += i + ". \n";
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrgOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
                  n: 3,
               }),
               beforeSend: function () {
                  $(".wrg-loader-container").show();
                  $(".wrg-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedTitles = response.choices[0].text
                     .split("\n")
                     .slice(1, numberOfTitles + 1);
                  generatedTitles.forEach(function (title, index) {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                        <div class="wrg-analysis-item">
                            <h3 class="wrg-analysis-title">Draft ${
                               index + 1
                            }</h3>
                            <div class="wrg-analysis-content">
                            <div class="wrg-analysis-desc">
                                <p>${cleanedTitle}</p>
                            </div>
                            </div>
                        </div>
                        `;
                     $(".wrg-meta-description-item-show").append(blogItem);
                  });
               },
               error: function (error) {
                  $(".wrg-loader-container").hide();
                  $(".wrg-api-error").show();
                  $(".wrg-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrg-loader-container").hide();
               },
            });
         }
      });

      //generate blog content
      $(".wrg-generate-content-btn").on("click", function () {
         if ($(".wrg-blog-content").hasClass("active")) {
            var titleText = $(".wrg-content-title").val();
            var metaDescription = $(".wrg-content-metades").val();
            var words = $(".wrg-words-length").val();

            var promptText =
               "Generate words SEO-friendly blog content. The content should be approximately" +
               words +
               "words long ";

            if (titleText && metaDescription) {
               promptText +=
                  " for " + titleText + " with a focus on " + metaDescription;
            } else if (titleText) {
               promptText += " for " + titleText;
            } else if (metaDescription) {
               promptText += " related to " + metaDescription;
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrgOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 4000,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrg-loader-container").show();
                  $(".wrg-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedContent = response.choices[0].text;
                  var formattedContent = generatedContent
                     .replace(/^\n{2}/, "")
                     .replace(/\n/g, "<br>");

                  if (typeof wp.blocks !== "undefined") {
                     $(".editor-post-title").text(titleText);
                     $(".wrg-meta-description").val(metaDescription);
                     wp.data.dispatch("core/editor").editPost({
                        content: "<p>" + formattedContent + "</p>",
                     });
                  } else {
                     // Insert generated content into the Classic editor
                     $("#title-prompt-text").text("");
                     $("#title").val(titleText);
                     $(".wrg-meta-description").val(metaDescription);
                     // Insert generated content into WordPress editor
                     var editor = document.getElementById("content_ifr");
                     var editorDocument =
                        editor.contentDocument || editor.contentWindow.document;
                     editorDocument.getElementById("tinymce").innerHTML =
                        formattedContent;
                  }
               },
               error: function (error) {
                  $(".wrg-loader-container").hide();
                  $(".wrg-api-error").show();
                  $(".wrg-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrg-loader-container").hide();
               },
            });
         }
      });

      /**********************************************
       *            Woocommerce Widget              *
       **********************************************/
      // woocommerce product title generate
      $(".wrg-product-title-generate").on("click", function () {
         if ($(".wrg-product-title").hasClass("active")) {
            var productName = $(".wrg-product-name").val();
            var productBrief = $(".wrg-product-brief").val();
            var selectedLanguage = $(".wrg-product-language").val();
            var selectedTone = $(".wrg-product-tone").val();
            var selectedWritingStyle = $(".wrg-product-writing-style").val();
            var titleMaxResult = $(".wrg-product-max-result").val();

            var promptText =
               "Generate " + titleMaxResult + " SEO-friendly product titles";
            if (productName && productBrief) {
               promptText +=
                  " related to " + productName + " and " + productBrief;
            } else if (productName) {
               promptText += " about " + productName;
            } else if (productBrief) {
               promptText += " on " + productBrief;
            }
            promptText +=
               " in " +
               selectedLanguage +
               " language with a " +
               selectedTone +
               " tone and " +
               selectedWritingStyle +
               " writing style:\n";

            //Check if wrgOpenApiKey and input value is Not Empty
            if (!wrgOpenApiKey || !productName) {
               wrgShowError(
                  !wrgOpenApiKey
                     ? "Please insert your open API key from settings."
                     : "Please insert requered input."
               );
               return;
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrgOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrg-loader-container").show();
                  $(".wrg-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedContent = response.choices[0].text;
                  var titleArray = generatedContent
                     .split(/\d+\.\s/)
                     .filter(Boolean);

                  // Check if the first element is empty and remove it
                  if (titleArray[0].trim() === "") {
                     titleArray.shift();
                  }

                  $(".wrg-product-title-result").empty(); // Clear previous results
                  titleArray.forEach(function (title, index) {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                        <div class="wrg-analysis-item">
                        <h3 class="wrg-analysis-title">Draft ${index + 1}</h3>
                        <div class="wrg-analysis-content">
                            <div class="wrg-analysis-desc">
                            <p>${cleanedTitle}</p>
                            </div>
                        </div>
                        </div>
                    `;
                     $(".wrg-product-title-item-show").append(blogItem);
                  });
               },
               error: function (error) {
                  $(".wrg-loader-container").hide();
                  $(".wrg-api-error").show();
                  $(".wrg-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrg-loader-container").hide();
               },
            });
         }
      });

      //woocommerce product long description generate
      $(".wrg-generate-long-des-btn").on("click", function () {
         if ($(".wrg-product-long-des").hasClass("active")) {
            var titleText = $(".wrg-product-long-title").val();
            var context = $(".wrg-product-long-context").val();
            var language = $(".wrg-product-des-language").val();
            var tone = $(".wrg-product-des-tone").val();
            var writingStyle = $(".wrg-product-des-w-style").val();
            var words = $(".wrg-product-long-length").val();

            var promptText = "Generate product long description";

            if (titleText && context) {
               promptText +=
                  " for " + titleText + " with a focus on " + context;
            } else if (titleText) {
               promptText += " for " + titleText;
            } else if (context) {
               promptText += " related to " + context;
            }

            promptText +=
               " in " +
               language +
               " language with a " +
               tone +
               " tone and " +
               writingStyle +
               " writing style, within " +
               words +
               " words";

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrgOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 3000,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrg-loader-container").show();
                  $(".wrg-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedContent = response.choices[0].text;
                  var formattedContent = generatedContent
                     .replace(/^\n{2}/, "")
                     .replace(/\n/g, "<br>");

                  $("#title-prompt-text").text("");
                  // Insert generated title into WordPress title input
                  $("#title").val(titleText);

                  // Insert generated content into WordPress editor
                  var editor = document.getElementById("content_ifr");
                  var editorDocument =
                     editor.contentDocument || editor.contentWindow.document;
                  editorDocument.getElementById("tinymce").innerHTML =
                     formattedContent;
               },
               error: function (error) {
                  $(".wrg-loader-container").hide();
                  $(".wrg-api-error").show();
                  $(".wrg-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrg-loader-container").hide();
               },
            });
         }
      });

      //woocommerce product short description generate
      $(".wrg-generate-short-des-btn").on("click", function () {
         if ($(".wrg-product-short-des").hasClass("active")) {
            var titleText = $(".wrg-product-short-title").val();
            var context = $(".wrg-product-short-context").val();
            var language = $(".wrg-product-short-language").val();
            var tone = $(".wrg-product-short-tone").val();
            var writingStyle = $(".wrg-product-short-w-style").val();
            var words = $(".wrg-product-short-length").val();

            var promptText = "Generate product short description";

            if (titleText && context) {
               promptText +=
                  " for " + titleText + " with a focus on " + context;
            } else if (titleText) {
               promptText += " for " + titleText;
            } else if (context) {
               promptText += " related to " + context;
            }

            promptText +=
               " in " +
               language +
               " language with a " +
               tone +
               " tone and " +
               writingStyle +
               " writing style, within " +
               words +
               " words";

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrgOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrg-loader-container").show();
                  $(".wrg-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedContent = response.choices[0].text;
                  var formattedContent = generatedContent
                     .replace(/^\n{2}/, "")
                     .replace(/\n/g, "<br>");

                  // Insert generated content into WooCommerce short description editor
                  var editors = tinymce.editors;
                  if (editors.length > 1) {
                     var shortDescriptionEditor = editors[1];
                     shortDescriptionEditor.setContent(formattedContent);
                  }
               },
               error: function (error) {
                  $(".wrg-loader-container").hide();
                  $(".wrg-api-error").show();
                  $(".wrg-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrg-loader-container").hide();
               },
            });
         }
      });

      /**********************************************
       *             WriteGen Mode                  *
       **********************************************/
      $(".wrg-writegen-mode-btn").on("click", function () {
         var content = $(".wrg-writegen-content").val();
         var selectedWritingStyle = $(".wrg-writegen-writingstyle").val();
         var titleMaxResult = $(".wrg-writegen-quantity").val();
         var promptText =
            "Write about this topic " +
            content +
            " with a " +
            selectedWritingStyle +
            " writing style:\n";

         for (var i = 1; i <= parseInt(titleMaxResult); i++) {
            promptText += i + ".\n";
         }

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !content) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
               n: parseInt(titleMaxResult),
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedTitles = response.choices.map(function (choice) {
                  return choice.text.trim();
               });

               generatedTitles.forEach(function (title, index) {
                  if (title.trim() !== "") {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                            <div class="wrg-analysis-item">
                            <h3 class="wrg-analysis-title">Draft ${
                               index + 1
                            }</h3> 
                            <div class="wrg-analysis-content">
                                <div class="wrg-analysis-desc">
                                    <p>${cleanedTitle}</p>
                                </div>
                            </div>
                                <div class="wrg-copy-content wrg-copy">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                            </div>
                            <div class="wrg-copy-content wrg-copy-done">
                                <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                            </div>
                            </div>`;
                     $(".wrg-writegen-item-show").append(blogItem);
                  }
               });
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Blog title                    *
       **********************************************/
      $(".wrg-single-blog-title-btn").on("click", function () {
         var blogKeywords = $(".wrg-single-blog-keywords").val();
         var selectedLanguage = $(".wrg-single-blog-language").val();
         var selectedTone = $(".wrg-single-blog-tone").val();
         var selectedWritingStyle = $(".wrg-single-blog-writing-style").val();
         var titleMaxResult = $(".wrg-single-blog-max-result").val();

         var promptText =
            "Generate " + titleMaxResult + " SEO-friendly blog titles";
         promptText += " related to " + blogKeywords;

         promptText +=
            " in " +
            selectedLanguage +
            " language with a " +
            selectedTone +
            " tone and " +
            selectedWritingStyle +
            " writing style:\n";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !blogKeywords) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 1500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var titleArray = generatedContent
                  .split(/\d+\.\s/)
                  .filter(Boolean);

               // Check if the first element is empty and remove it
               if (titleArray[0].trim() === "") {
                  titleArray.shift();
               }

               $(".wrg-product-title-result").empty(); // Clear previous results

               titleArray.forEach(function (title, index) {
                  var titleItems = `
                    <div class="wrg-analysis-item">
                        <h3 class="wrg-analysis-title">Draft ${index + 1}</h3> 
                        <div class="wrg-analysis-content">
                            <div class="wrg-analysis-desc">
                                <p>${title.trim()}</p>
                            </div>
                        </div>
                        <div class="wrg-copy-content wrg-copy">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                        </div>
                        <div class="wrg-copy-content wrg-copy-done">
                            <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                        </div>
                    </div>`;
                  // Append each question as a separate item
                  $(".wrg-blog-title-result").append(titleItems);
               });
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Blog Content                  *
       **********************************************/
      $(".wrg-blog-content-btn ").on("click", function () {
         var titleText = $(".wrg-blog-conten-title").val();
         var language = $(".wrg-blog-content-language").val();
         var tone = $(".wrg-blog-content-tone").val();
         var writingStyle = $(".wrg-blog-content-wr-style").val();
         var words = $(".wrg-blog-content-length").val();

         var promptText =
            "Generate SEO-Friedly blog description about" + titleText;

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style, within " +
            words +
            "words";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !titleText) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var formattedContent = generatedContent
                  .replace(/^\n{2}/, "")
                  .replace(/\n/g, "<br>");
               // Insert generated content into WordPress editor
               var editor = document.getElementById("content_ifr");
               var editorDocument =
                  editor.contentDocument || editor.contentWindow.document;
               editorDocument.getElementById("tinymce").innerHTML =
                  formattedContent;
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });
      /**********************************************
       *              Blog Outlines                  *
       **********************************************/
      $(".wrg-blog-outlines-btn").on("click", function () {
         var titleText = $(".wrg-blog-outlines-title").val();
         var language = $(".wrg-blog-outlines-language").val();
         var tone = $(".wrg-blog-outlines-tone").val();
         var writingStyle = $(".wrg-blog-outlines-wr-style").val();
         var titleMaxResult = $(".wrg-blog-outlines-length").val();

         var promptText =
            "Generate blog outlines about " +
            titleText +
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style:\n";

         for (var i = 1; i <= titleMaxResult; i++) {
            promptText += i + ".\n";
            for (var j = 1; j <= 3; j++) {
               // Assuming 3 sub-titles (A, B, C) for each main title (I, II, III)
               promptText += i + String.fromCharCode(64 + j) + ".\n";
            }
         }
         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !titleText) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var outlinesArray = generatedContent.split("\n").filter(Boolean);

               // If you want to display the outlines as grouped items, you can use the following code:
               $(".wrg-blog-outlines-item-show").empty();
               var mainTitle = "";
               var blogItem = "";
               outlinesArray.forEach(function (title, index) {
                  // Remove the numbers and extra spaces from the title
                  var cleanedTitle = title.replace(/^\d+\.\s*/, "").trim();

                  if (cleanedTitle.includes(".")) {
                     // Subtitle (e.g., A., B., C.)
                     blogItem += `
                            <p>${cleanedTitle}</p>`;
                  } else {
                     // Main Title (e.g., I., II., III.)
                     if (blogItem !== "") {
                        // Append the previous blogItem to the container if it exists
                        $(".wrg-blog-outlines-item-show").append(blogItem);
                     }
                     mainTitle = cleanedTitle;
                     blogItem = `
                            <div class="wrg-analysis-item">
                            <h3 class="wrg-analysis-title">${mainTitle}</h3> 
                            <div class="wrg-analysis-content">
                                <div class="wrg-analysis-desc">`;
                  }
               });
               // Append the last blogItem to the container
               if (blogItem !== "") {
                  $(".wrg-blog-outlines-item-show").append(blogItem);
               }
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });
      /**********************************************
       *               Blog tags                    *
       **********************************************/
      $(".wrg-blog-tags-btn").on("click", function () {
         var titleText = $(".wrg-blog-tags-title").val();
         var language = $(".wrg-blog-tags-language").val();
         var tone = $(".wrg-blog-tags-tone").val();
         var writingStyle = $(".wrg-blog-tags-wr-style").val();
         var maxTags = $(".wrg-blog-tags-length").val();

         var promptText =
            "Generate SEO-Friendly " +
            maxTags +
            " blog tags about " +
            titleText;

         promptText +=
            " separate with comma" +
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !titleText) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var tagsArray = generatedContent.split(",");

               // Wrap each tag in <span> tags
               var formattedTags = tagsArray.map(function (tag) {
                  return "<span>" + tag.trim() + "</span>";
               });

               var titleItems = `
                <div class="wrg-analysis-item">
                    <div class="wrg-analysis-content">
                    <div class="wrg-analysis-desc">
                        <div class="wrg-generated-tags">${formattedTags.join(
                           " "
                        )}</div>
                    </div>
                    </div>
                    <div class="wrg-copy-content wrg-copy">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                        </div>
                        <div class="wrg-copy-content wrg-copy-done">
                            <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                        </div>
                </div>`;

               $(".wrg-blog-tags-result").append(titleItems);
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Blog rewrite                  *
       **********************************************/
      $(".wrg-blogrewrite-btn").on("click", function () {
         var contentText = $(".wrg-blogrewrite-content").val();
         var language = $(".wrg-blogrewrite-language").val();
         var tone = $(".wrg-blogrewrite-tone").val();
         var writingStyle = $(".wrg-blogrewrite-writing-style").val();
         var words = $(".wrg-blog-content-length").val();

         var promptText =
            "Rewrite this content to create an SEO-friendly blog description:\n" +
            contentText;

         promptText +=
            "\n\nRewrite the content in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style, keeping it within " +
            words +
            " words.";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !contentText) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var formattedContent = generatedContent
                  .replace(/^\n{2}/, "")
                  .replace(/\n/g, "<br>");
               // Insert generated content into WordPress editor
               var editor = document.getElementById("content_ifr");
               var editorDocument =
                  editor.contentDocument || editor.contentWindow.document;
               editorDocument.getElementById("tinymce").innerHTML =
                  formattedContent;
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Blog Brief                    *
       **********************************************/
      $(".wrg-blog-brief-btn").on("click", function () {
         var content = $(".wrg-blog-brief-content").val();
         var language = $(".wrg-blog-brief-language").val();
         var tone = $(".wrg-blog-brief-tone").val();
         var selectedWritingStyle = $(".wrg-blog-brief-w-style").val();
         var titleMaxResult = $(".wrg-blog-brief-quantity").val();
         var promptText =
            "Generate blog brief about this topic " +
            content +
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            selectedWritingStyle +
            " writing style:\n";

         for (var i = 1; i <= parseInt(titleMaxResult); i++) {
            promptText += i + ".\n";
         }

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !content) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
               n: parseInt(titleMaxResult),
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedTitles = response.choices.map(function (choice) {
                  return choice.text.trim();
               });

               generatedTitles.forEach(function (title, index) {
                  if (title.trim() !== "") {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                            <div class="wrg-analysis-item">
                            <h3 class="wrg-analysis-title">Draft ${
                               index + 1
                            }</h3> 
                            <div class="wrg-analysis-content">
                                <div class="wrg-analysis-desc">
                                    <p>${cleanedTitle}</p>
                                </div>
                            </div>
                            <div class="wrg-copy-content wrg-copy">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                            </div>
                            <div class="wrg-copy-content wrg-copy-done">
                            <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                            </div>
                            </div>`;
                     $(".wrg-blog-brief-item-show").append(blogItem);
                  }
               });
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *          Paragraph Compression             *
       **********************************************/
      $(".wrg-paragraph-compression-btn").on("click", function () {
         var content = $(".wrg-paragraph-compression-content").val();
         var language = $(".wrg-paragraph-compression-language").val();
         var tone = $(".wrg-paragraph-compression-tone").val();
         var selectedWritingStyle = $(
            ".wrg-paragraph-compression-w-style"
         ).val();
         var compressionRatio = $(".wrg-paragraph-compression-ratio").val();

         var promptText =
            "Compress the following paragraph:\n" +
            content +
            "\n\nUsing " +
            compressionRatio +
            " compression ratio, rewrite it in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            selectedWritingStyle +
            " writing style.";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !content) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var blogItem = `
                <div class="wrg-analysis-item">
                    <div class="wrg-analysis-content">
                        <div class="wrg-analysis-desc">
                            <p>${generatedContent}</p>
                        </div>
                    </div>
                    <div class="wrg-copy-content wrg-copy">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                </div>
                <div class="wrg-copy-content wrg-copy-done">
                    <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                </div>
                </div>`;
               // Insert generated content into a HTML element for display
               $(".wrg-paragraph-compression-result").append(blogItem);
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *            Related Keywords                *
       **********************************************/
      $(".wrg-related-tags-btn").on("click", function () {
         var titlekeywords = $(".wrg-related-tags-content").val();
         var language = $(".wrg-related-tags-language").val();
         var tone = $(".wrg-related-tags-tone").val();
         var writingStyle = $(".wrg-related-tags-w-style").val();
         var maxTags = $(".wrg-related-tags-number").val();

         var promptText =
            "Generate " +
            maxTags +
            " SEO-Friendly keywords related to " +
            titlekeywords;

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style.";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !titlekeywords) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var blogItem = `
                <div class="wrg-analysis-item">
                    <div class="wrg-analysis-content">
                        <div class="wrg-analysis-desc">
                            <p>${generatedContent}</p>
                        </div>
                    </div>
                    <div class="wrg-copy-content wrg-copy">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                </div>
                <div class="wrg-copy-content wrg-copy-done">
                    <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                </div>
                </div>`;
               // Insert generated content into a HTML element for display
               $(".wrg-related-tags-result").append(blogItem);

               $(".wrg-loader-container").hide();
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
         });
      });

      /**********************************************
       *             Find Question                  *
       **********************************************/
      $(".wrg-find-question-btn").on("click", function () {
         var titleKeywords = $(".wrg-find-question-content").val();
         var language = $(".wrg-find-question-language").val();
         var tone = $(".wrg-find-question-tone").val();
         var writingStyle = $(".wrg-find-question-w-style").val();
         var maxQuestions = $(".wrg-find-question-number").val();

         var promptText =
            "Generate " +
            maxQuestions +
            " SEO-Friendly questions related to " +
            titleKeywords;

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style:\n";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !titlekeywords) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var questionsArray = generatedContent
                  .split(/\d+\.\s/)
                  .filter(Boolean);

               // Check if the first element is empty and remove it
               if (questionsArray[0].trim() === "") {
                  questionsArray.shift();
               }

               $(".wrg-find-question-result").empty(); // Clear previous results

               questionsArray.forEach(function (question, index) {
                  var questionItem = `
                    <div class="wrg-analysis-item">
                        <h3 class="wrg-analysis-title">Draft ${index + 1}</h3> 
                        <div class="wrg-analysis-content">
                            <div class="wrg-analysis-desc">
                            <p>${question.trim()}</p>
                            </div>
                        </div>
                        <div class="wrg-copy-content wrg-copy">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                    </div>
                    <div class="wrg-copy-content wrg-copy-done">
                        <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                    </div>
                    </div>`;
                  // Append each question as a separate item
                  $(".wrg-find-question-result").append(questionItem);
               });
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Short Story                   *
       **********************************************/
      $(".wrg-short-story-btn").on("click", function () {
         var content = $(".wrg-short-story-content").val();
         var language = $(".wrg-short-story-language").val();
         var tone = $(".wrg-pshort-story-tone").val();
         var selectedWritingStyle = $(".wrg-short-story-w-style").val();
         var storyLength = $(".wrg-short-story-length").val();

         var promptText =
            "Generate a " +
            storyLength +
            " words short story about the following topic:\n\n" +
            content +
            "in" +
            language +
            " language with a " +
            tone +
            " tone and " +
            selectedWritingStyle +
            " writing style.";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !content) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var blogItem = `
                <div class="wrg-analysis-item">
                    <div class="wrg-analysis-content">
                        <div class="wrg-analysis-desc">
                            <p>${generatedContent}</p>
                        </div>
                    </div>
                    <div class="wrg-copy-content wrg-copy">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                </div>
                <div class="wrg-copy-content wrg-copy-done">
                    <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                </div>
                </div>`;
               // Insert generated content into a HTML element for display
               $(".wrg-short-story-result").append(blogItem);
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *       Woocommerce product title            *
       **********************************************/
      $(".wrg-single-product-title-btn").on("click", function () {
         var productName = $(".wrg-single-product-title").val();
         var productKeywords = $(".wrg-single-product-keywords").val();
         var selectedLanguage = $(".wrg-single-product-language").val();
         var selectedTone = $(".wrg-single-product-tone").val();
         var selectedWritingStyle = $(
            ".wrg-single-product-writing-style"
         ).val();
         var titleMaxResult = $(".wrg-single-product-max-result").val();

         var promptText =
            "Generate " + titleMaxResult + " SEO-friendly product titles";
         if (productName && productKeywords) {
            promptText +=
               " related to " + productName + " and " + productKeywords;
         } else if (productName) {
            promptText += " about " + productName;
         } else if (productKeywords) {
            promptText += " on " + productKeywords;
         }
         promptText +=
            " in " +
            selectedLanguage +
            " language with a " +
            selectedTone +
            " tone and " +
            selectedWritingStyle +
            " writing style:\n";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !productName) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 1500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var titleArray = generatedContent
                  .split(/\d+\.\s/)
                  .filter(Boolean);

               // Check if the first element is empty and remove it
               if (titleArray[0].trim() === "") {
                  titleArray.shift();
               }

               $(".wrg-product-title-result").empty(); // Clear previous results

               titleArray.forEach(function (title, index) {
                  var titleItems = `
                    <div class="wrg-analysis-item">
                        <h3 class="wrg-analysis-title">Draft ${index + 1}</h3> 
                        <div class="wrg-analysis-content">
                            <div class="wrg-analysis-desc">
                                <p>${title.trim()}</p>
                            </div>
                        </div>
                        <div class="wrg-copy-content wrg-copy">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                    </div>
                    <div class="wrg-copy-content wrg-copy-done">
                        <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                    </div>
                    </div>`;
                  // Append each question as a separate item
                  $(".wrg-product-title-result").append(titleItems);
               });
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *       Woocommerce long description         *
       **********************************************/
      $(".wrg-single-product-long-desc-btn").on("click", function () {
         var titleText = $(".wrg-single-product-long-desc-title").val();
         var keyWords = $(".wrg-single-product-long-desc-keywords").val();
         var language = $(".wrg-single-product-long-desc-language").val();
         var tone = $(".wrg-single-product-long-desc-tone").val();
         var writingStyle = $(".wrg-single-product-long-desc-w-style").val();
         var words = $(".wrg-single-product-long-desc-length").val();

         var promptText = "Generate product long description";

         if (titleText && keyWords) {
            promptText += " for " + titleText + " with a focus on " + keyWords;
         } else if (titleText) {
            promptText += " for " + titleText;
         } else if (keyWords) {
            promptText += " related to " + keyWords;
         }

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style, within " +
            words +
            " words";

         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !titleText) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var formattedContent = generatedContent
                  .replace(/^\n{2}/, "")
                  .replace(/\n/g, "<br>");

               $("#title-prompt-text").text("");
               // Insert generated title into WordPress title input
               $("#title").val(titleText);

               // Insert generated content into WordPress editor
               var editor = document.getElementById("content_ifr");
               var editorDocument =
                  editor.contentDocument || editor.contentWindow.document;
               editorDocument.getElementById("tinymce").innerHTML =
                  formattedContent;
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *      Woocommerce Short description         *
       **********************************************/
      $(".wrg-single-product-short-desc-btn").on("click", function () {
         var titleText = $(".wrg-single-product-short-desc-title").val();
         var kewords = $(".wrg-single-product-short-desc-keywords").val();
         var language = $(".wrg-single-product-short-desc-language").val();
         var tone = $(".wrg-single-product-short-desc-tone").val();
         var writingStyle = $(".wrg-single-product-short-desc-w-style").val();
         var words = $(".wrg-single-product-short-desc-length").val();

         var promptText = "Generate product short description";

         if (titleText && kewords) {
            promptText += " for " + titleText + " with a focus on " + kewords;
         } else if (titleText) {
            promptText += " for " + titleText;
         } else if (kewords) {
            promptText += " related to " + kewords;
         }
         //Check if wrgOpenApiKey and input value is Not Empty
         if (!wrgOpenApiKey || !titleText) {
            wrgShowError(
               !wrgOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style, within " +
            words +
            " words";

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrgOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 1500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrg-loader-container").show();
               $(".wrg-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var formattedContent = generatedContent
                  .replace(/^\n{2}/, "")
                  .replace(/\n/g, "<br>");

               // Insert generated content into WooCommerce short description editor
               var editors = tinymce.editors;
               if (editors.length > 1) {
                  var shortDescriptionEditor = editors[1];
                  shortDescriptionEditor.setContent(formattedContent);
               }
            },
            error: function (error) {
               $(".wrg-loader-container").hide();
               $(".wrg-api-error").show();
               $(".wrg-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrg-loader-container").hide();
            },
         });
      });

      /**********************************************
       *            Widget save settings            *
       **********************************************/
      $(".wrg-settings-widget-save-btn").on("click", function () {
         var nonce = $("#wrg-save-settings-nonce").val();
        
         var data = {
            wrg_blog_widget: $(".wrg-blog-widget").prop("checked")
               ? $(".wrg-blog-widget").val()
               : null,
            wrg_woocommerce_widget: $(".wrg-woocommerce-widget").prop("checked")
               ? $(".wrg-woocommerce-widget").val()
               : null,
            wrg_writegen_mode: $(".wrg-writegen-mode").prop("checked")
               ? $(".wrg-writegen-mode").val()
               : null,
            wrg_blog_title: $(".wrg-blog-title").prop("checked")
               ? $(".wrg-blog-title").val()
               : null,
            wrg_blog_content: $(".wrg-blog-content").prop("checked")
               ? $(".wrg-blog-content").val()
               : null,
            wrg_blog_outline: $(".wrg-blog-outline").prop("checked")
               ? $(".wrg-blog-outline").val()
               : null,
            wrg_blog_tags: $(".wrg-blog-tags").prop("checked")
               ? $(".wrg-blog-tags").val()
               : null,
            wrg_rewrite_content: $(".wrg-rewrite-content").prop("checked")
               ? $(".wrg-rewrite-content").val()
               : null,
            wrg_brief_generate: $(".wrg-brief-generate").prop("checked")
               ? $(".wrg-brief-generate").val()
               : null,
            wrg_paragraph_compression: $(".wrg-paragraph-compression").prop(
               "checked"
            )
               ? $(".wrg-paragraph-compression").val()
               : null,
            wrg_related_keywords: $(".wrg-related-keyword").prop("checked")
               ? $(".wrg-related-keyword").val()
               : null,
            wrg_find_question: $(".wrg-fing-question").prop("checked")
               ? $(".wrg-fing-question").val()
               : null,
            wrg_short_story: $(".wrg-short-story").prop("checked")
               ? $(".wrg-short-story").val()
               : null,
            wrg_woocommerce_product_title: $(
               ".wrg-woocommerce-product-title"
            ).prop("checked")
               ? $(".wrg-woocommerce-product-title").val()
               : null,
            wrg_woocommerce_short_desc: $(".wrg-woocommerce-short-desc").prop(
               "checked"
            )
               ? $(".wrg-woocommerce-short-desc").val()
               : null,
            wrg_woocommerce_long_desc: $(".wrg-woocommerce-long-desc").prop(
               "checked"
            )
               ? $(".wrg-woocommerce-long-desc").val()
               : null,
         };

         $.ajax({
            type: "POST",
            url: wrgHomeUrl + "/wp-json/writegen/v1/allwidgetsettings",
            data: data,
            headers: {
               "X-WRG-Nonce": nonce,
            },
            beforeSend: function () {
               // Show loading spinner
               $(".wrg-save-loader").show();
            },
            success: function (response) {},
            error: function (error) {
               wrgShowToast("Something wrong try again.");
               $(".wrg-save-loader").hide();
               $(".wrg-settings-api-save-btn svg").show();
            },
            complete: function () {
               // Actions to be taken after the request is complete
               wrgShowToastWidget("Saved successfully!");
               $(".wrg-save-loader").hide();
               $(".wrg-settings-api-save-btn svg").show();
            },
         });
      });

      /**********************************************
       *           API settings             *
       **********************************************/
      $(".wrg-save-setting-btn").on("click", function () {
         var nonce = $("#wrg-save-settings-nonce").val();
         var data = {
            wrg_open_api_key: $(".wrg-openapi-key").val(),
            wrg_serp_analytics: $(".wrg-serp-analytics").prop("checked")
               ? $(".wrg-serp-analytics").val()
               : null,
            wrg_serp_api_login: $(".wrg-serp-api-login").val(),
            wrg_serp_api_password: $(".wrg-serp-api-password").val(),
         };

         $.ajax({
            type: "POST",
            url: wrgHomeUrl + "/wp-json/writegen/v1/settings",
            data: data,
            headers: {
               "X-WRG-Nonce": nonce,
            },
            beforeSend: function () {
               // Show loading spinner
               $(".wrg-save-loader").show();
            },
            success: function (response) {},
            error: function (error) {
               wrgShowToast("Something wrong try again.");
               $(".wrg-save-loader").hide();
               $(".wrg-settings-api-save-btn svg").show();
            },
            complete: function (message) {
               wrgShowToast("Saved successfully!");
               $(".wrg-save-loader").hide();
               $(".wrg-settings-api-save-btn svg").show();
            },
         });
      });
   });
})(jQuery);
