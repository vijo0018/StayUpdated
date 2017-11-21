using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace StayUpdated.Controllers
{
    public class WorldNewsController : Controller
    {
        // GET: WorldNews
        public ActionResult Index()
        {
            return View();
        }
        public ActionResult Politics()
        {
            return View();
        }
        public ActionResult Sport()
        {
            return View();
        }
        public ActionResult Weather()
        {
            return View();
        }
    }
}