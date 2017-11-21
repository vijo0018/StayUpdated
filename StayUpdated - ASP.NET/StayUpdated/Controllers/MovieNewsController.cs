using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace StayUpdated.Controllers
{
    public class MovieNewsController : Controller
    {
        // GET: MovieNews
        public ActionResult Index()
        {
            return View();
        }
        public ActionResult Trailers()
        {
            return View();
        }
        public ActionResult Reviews()
        {
            return View();
        }
        public ActionResult Upcoming()
        {
            return View();
        }
    }
}