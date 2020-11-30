/******/ (function(modules) { // webpackBootstrap
  /******/ 	// The module cache
  /******/ 	var installedModules = {};
  /******/
  /******/ 	// The require function
  /******/ 	function __webpack_require__(moduleId) {
    /******/
    /******/ 		// Check if module is in cache
    /******/ 		if(installedModules[moduleId]) {
      /******/ 			return installedModules[moduleId].exports;
      /******/ 		}
      /******/ 		// Create a new module (and put it into the cache)
      /******/ 		var module = installedModules[moduleId] = {
        /******/ 			i: moduleId,
        /******/ 			l: false,
        /******/ 			exports: {}
        /******/ 		};
        /******/
        /******/ 		// Execute the module function
        /******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
        /******/
        /******/ 		// Flag the module as loaded
        /******/ 		module.l = true;
        /******/
        /******/ 		// Return the exports of the module
        /******/ 		return module.exports;
        /******/ 	}
        /******/
        /******/
        /******/ 	// expose the modules object (__webpack_modules__)
        /******/ 	__webpack_require__.m = modules;
        /******/
        /******/ 	// expose the module cache
        /******/ 	__webpack_require__.c = installedModules;
        /******/
        /******/ 	// define getter function for harmony exports
        /******/ 	__webpack_require__.d = function(exports, name, getter) {
          /******/ 		if(!__webpack_require__.o(exports, name)) {
            /******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
            /******/ 		}
            /******/ 	};
            /******/
            /******/ 	// define __esModule on exports
            /******/ 	__webpack_require__.r = function(exports) {
              /******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
                /******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
                /******/ 		}
                /******/ 		Object.defineProperty(exports, '__esModule', { value: true });
                /******/ 	};
                /******/
                /******/ 	// create a fake namespace object
                /******/ 	// mode & 1: value is a module id, require it
                /******/ 	// mode & 2: merge all properties of value into the ns
                /******/ 	// mode & 4: return value when already ns object
                /******/ 	// mode & 8|1: behave like require
                /******/ 	__webpack_require__.t = function(value, mode) {
                  /******/ 		if(mode & 1) value = __webpack_require__(value);
                  /******/ 		if(mode & 8) return value;
                  /******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
                  /******/ 		var ns = Object.create(null);
                  /******/ 		__webpack_require__.r(ns);
                  /******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
                  /******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
                  /******/ 		return ns;
                  /******/ 	};
                  /******/
                  /******/ 	// getDefaultExport function for compatibility with non-harmony modules
                  /******/ 	__webpack_require__.n = function(module) {
                    /******/ 		var getter = module && module.__esModule ?
                    /******/ 			function getDefault() { return module['default']; } :
                    /******/ 			function getModuleExports() { return module; };
                    /******/ 		__webpack_require__.d(getter, 'a', getter);
                    /******/ 		return getter;
                    /******/ 	};
                    /******/
                    /******/ 	// Object.prototype.hasOwnProperty.call
                    /******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
                    /******/
                    /******/ 	// __webpack_public_path__
                    /******/ 	__webpack_require__.p = "";
                    /******/
                    /******/
                    /******/ 	// Load entry module and return exports
                    /******/ 	return __webpack_require__(__webpack_require__.s = "../src/assets/js/pages/crud/datatables/advanced/column-rendering.js");
                    /******/ })
                    /************************************************************************/
                    /******/ ({
                      
                      /***/ "../src/assets/js/pages/crud/datatables/advanced/column-rendering.js":
                      /*!***************************************************************************!*\
                      !*** ../src/assets/js/pages/crud/datatables/advanced/column-rendering.js ***!
                      \***************************************************************************/
                      /*! no static exports found */
                      /***/ (function(module, exports, __webpack_require__) {
                        
                        "use strict";
                        
                        var KTDatatablesAdvancedColumnRendering = function() 
                        {
                          
                          
                          var initTable1 = function() 
                          {
                            
                            var table = $('#kt_table_1');
                            
                            
                            // begin first table
                            table.DataTable(
                              {
                                
                                responsive: true,
                                paging: true,
                                columnDefs: [
                                  
                                  {
                                    
                                    targets: 0,
                                    title: 'Agent',
                                    render: function(data, type, full, meta) 
                                    {
                                      
                                      var number = KTUtil.getRandomInt(1, 14);
                                      
                                      var user_img = '100_' + number + '.jpg';
                                      
                                      
                                      var output;
                                      
                                      if (number > 8) 
                                      {
                                        
                                        output = `
                                        <div class="kt-user-card-v2">
                                        <div class="kt-user-card-v2__pic">
                                        <img src="assets/media/users/` + user_img + `" class="m-img-rounded kt-marginless" alt="photo">
                                        </div>
                                        <div class="kt-user-card-v2__details">
                                        <span class="kt-user-card-v2__name">` + full[2] + `</span>
                                        <a href="#" class="kt-user-card-v2__email kt-link">` + full[3] + `</a>
                                        </div>
                                        </div>`;
                                        
                                        
                                      }
                                      
                                      else 
                                      {
                                        
                                        var stateNo = KTUtil.getRandomInt(0, 7);
                                        
                                        var states = [
                                          'success',
                                          'brand',
                                          'danger',
                                          'success',
                                          'warning',
                                          'dark',
                                          'primary',
                                          'info'];
                                          
                                          var state = states[stateNo];
                                          
                                          
                                          output = `
                                          <div class="kt-user-card-v2">
                                          <div class="kt-user-card-v2__pic">
                                          <div class="kt-badge kt-badge--xl kt-badge--` + state + `"><span>` + full[2].substring(0, 1) + `</div>
                                          </div>
                                          <div class="kt-user-card-v2__details">
                                          <span class="kt-user-card-v2__name">` + full[2] + `</span>
                                          <a href="#" class="kt-user-card-v2__email kt-link">` + full[3] + `</a>
                                          </div>
                                          </div>`;
                                          
                                          
                                        }
                                        
                                        
                                        return output;
                                        
                                        
                                      }
                                      ,
                                      
                                    }
                                    ,
                                    
                                    {
                                      
                                      targets: 1,
                                      render: function(data, type, full, meta) 
                                      {
                                        
                                        return '<a class="kt-link" href="mailto:' + data + '">' + data + '</a>';
                                        
                                        
                                      }
                                      ,
                                      
                                    }
                                    ,
                                    
                                    {
                                      
                                      targets: -1,
                                      title: 'Actions',
                                      orderable: false,
                                      render: function(data, type, full, meta) 
                                      {
                                        
                                        return `
                                        <span class="dropdown">
                                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                        <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                        <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                        <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                                        </div>
                                        </span>
                                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                        <i class="la la-edit"></i>
                                        </a>`;
                                        
                                        
                                      }
                                      ,
                                      
                                    }
                                    ,
                                    
                                    {
                                      
                                      targets: 4,
                                      render: function(data, type, full, meta) 
                                      {
                                        
                                        var status = 
                                        {
                                          
                                          1: 
                                          {
                                            'title': 'Pending', 'class': 'kt-badge--brand'
                                          }
                                          ,
                                          2: 
                                          {
                                            'title': 'Delivered', 'class': ' kt-badge--danger'
                                          }
                                          ,
                                          3: 
                                          {
                                            'title': 'Canceled', 'class': ' kt-badge--primary'
                                          }
                                          ,
                                          4: 
                                          {
                                            'title': 'Success', 'class': ' kt-badge--success'
                                          }
                                          ,
                                          5: 
                                          {
                                            'title': 'Info', 'class': ' kt-badge--info'
                                          }
                                          ,
                                          6: 
                                          {
                                            'title': 'Danger', 'class': ' kt-badge--danger'
                                          }
                                          ,
                                          7: 
                                          {
                                            'title': 'Warning', 'class': ' kt-badge--warning'
                                          }
                                          ,
                                          
                                        };
                                        
                                        if (typeof status[data] === 'undefined') 
                                        {
                                          
                                          return data;
                                          
                                          
                                        }
                                        
                                        return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
                                        
                                        
                                      }
                                      ,
                                      
                                    }
                                    ,
                                    
                                    {
                                      
                                      targets: 5,
                                      render: function(data, type, full, meta) 
                                      {
                                        
                                        var status = 
                                        {
                                          
                                          1: 
                                          {
                                            'title': 'Online', 'state': 'danger'
                                          }
                                          ,
                                          2: 
                                          {
                                            'title': 'Retail', 'state': 'primary'
                                          }
                                          ,
                                          3: 
                                          {
                                            'title': 'Direct', 'state': 'success'
                                          }
                                          ,
                                          
                                        };
                                        
                                        if (typeof status[data] === 'undefined') 
                                        {
                                          
                                          return data;
                                          
                                          
                                        }
                                        
                                        return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--dot"></span>&nbsp;' +
                                        '<span class="kt-font-bold kt-font-' + status[data].state + '">' + status[data].title + '</span>';
                                        
                                        
                                      }
                                      ,
                                      
                                    }
                                    ,
                                  ],
                                  
                                }
                                );
                                
                                
                              };
                              
                              
                              return {
                                
                                
                                //main function to initiate the module
                                init: function(){
                                  initTable1();
                                }
                                
                                
                              };
                              
                            }
                            ();
                            
                            
                            jQuery(document).ready(function() 
                            {
                              
                              KTDatatablesAdvancedColumnRendering.init();
                              
                            }
                            );
                            
                            //# sourceURL=webpack:///../src/assets/js/pages/crud/datatables/advanced/column-rendering.js?
                            /***/ })
                            
                            /******/ });