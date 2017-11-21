using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace StayUpdated.Controllers
{
    public class MyProfileController : Controller
    {
        
        // GET: MyProfile
        public ActionResult Index()
        {
            return View();
        }
        public ActionResult Uploads()
        {
            return View();
        }
        public ActionResult AccountPost()
        {
            return View();
        }
        public ActionResult AccountSettings()
        {
            return View();
        }

        // Loggin 
        public ActionResult Loggin()
        {
            return View();
        }
        public ActionResult Logout()
        {
            return View();
        }
        public ActionResult NyMedlem()
        {
            return View();
        }


    }
}