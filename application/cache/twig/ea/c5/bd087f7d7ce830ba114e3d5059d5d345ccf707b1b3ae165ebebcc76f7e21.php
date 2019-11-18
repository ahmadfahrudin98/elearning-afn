<?php

/* welcome.html */
class __TwigTemplate_eac5bd087f7d7ce830ba114e3d5059d5d345ccf707b1b3ae165ebebcc76f7e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"btn-controls\">
    <div id=\"show-urgent-info\"></div>

    <div class=\"btn-box-row row-fluid\">
        <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <small class=\"pull-right hidden-phone hidden-tablet\">";
        // line 10
        echo twig_escape_filter($this->env, tgl_indo(date("Y-m-d")), "html", null, true);
        echo "</small>
                Selamat datang di <b>e-learning ";
        // line 11
        echo twig_escape_filter($this->env, get_pengaturan("nama-sekolah", "value"), "html", null, true);
        echo "</b>
                <br>
                <i class=\"icon icon-map-marker\"></i> Alamat: ";
        // line 13
        echo twig_escape_filter($this->env, get_pengaturan("alamat", "value"), "html", null, true);
        echo "
                ";
        // line 14
        if ((!twig_test_empty(get_pengaturan("telp", "value")))) {
            // line 15
            echo "                <i class=\"icon icon-phone\"></i> Telpon: ";
            echo twig_escape_filter($this->env, get_pengaturan("telp", "value"), "html", null, true);
            echo "
                ";
        }
        // line 17
        echo "            </div>
        </div>
    </div>

    ";
        // line 21
        if (is_admin()) {
            // line 22
            echo "    ";
            if (((isset($context["count_mapel_kelas"]) ? $context["count_mapel_kelas"] : null) == 0)) {
                // line 23
                echo "    <div class=\"well well-large well-box\" style=\"border:2px solid #29b7d3;\">
        <b><i class=\"icon-wrench\"></i> Atur data berikut supaya aplikasi e-learing dapat berjalan dengan baik:</b>
        <table class=\"table table-hover\" style=\"margin-top:10px;\">
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-book\"></i> Manajemen Matapelajaran</b></a>
                </td>
                <td>
                    Input semua Matapelajaran yang ada di sekolah
                </td>
            </tr>
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-tasks\"></i> Manajemen Kelas</b></a>
                </td>
                <td>
                    Input semua Kelas yang ada di sekolah
                </td>
            </tr>
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, site_url("kelas/mapel_kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-paste\"></i> Matapelajaran Kelas</b></a>
                </td>
                <td>
                    Atur Matapelajaran pada tiap-tiap Kelas
                </td>
            </tr>
        </table>
    </div>
    ";
            }
            // line 53
            echo "
    <div class=\"btn-box-row row-fluid\">
        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, site_url("siswa/index/1"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-group\"></i><b>";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["jml_siswa"]) ? $context["jml_siswa"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Siswa</p>
        </a>
        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, site_url("pengajar/index/1"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-user\"></i><b>";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar"]) ? $context["jml_pengajar"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pengajar</p>
        </a>
        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, site_url("siswa/index/0"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-group\"></i><b>";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["jml_siswa_pending"]) ? $context["jml_siswa_pending"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pending siswa</p>
        </a>
        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, site_url("pengajar/index/0"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-user\"></i><b>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar_pending"]) ? $context["jml_pengajar_pending"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pending pengajar</p>
        </a>
    </div>

   

           
        </div>
        
    </div>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if (is_pengajar()) {
            // line 82
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 83
            echo "    ";
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 84
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>
                ";
                // line 88
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>
    ";
            }
            // line 93
            echo "
    <div class=\"btn-box-row row-fluid\">
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-bullhorn\"></i> Pengumuman</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 99
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 100
                echo "                    <tr>
                        <td>";
                // line 101
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                </table>
            </div>
        </div>
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-signin\"></i> Riwayat login pengguna</b>
                <div id=\"show-last-login-list\"></div>
            </div>
        </div>
    </div>
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        if (is_siswa()) {
            // line 117
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 118
            echo "    ";
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 119
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>
                ";
                // line 123
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>
    ";
            }
            // line 128
            echo "
    <div class=\"btn-box-row row-fluid\">
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-tasks\"></i> Tugas terbaru</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 134
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas_terbaru"]) ? $context["tugas_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 135
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, site_url(("tugas?judul=" . urlencode($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                </table>
            </div>

            <div class=\"well well-small well-box\">
                <b><i class=\"icon-book\"></i> Materi terbaru</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 147
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materi_terbaru"]) ? $context["materi_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 148
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                echo "\" target=\"_tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                </table>
            </div>
        </div>

        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-bullhorn\"></i> Pengumuman</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 162
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 163
                echo "                    <tr>
                        <td>";
                // line 164
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                </table>
            </div>

            <div class=\"well well-small well-box\">
                <b><i class=\"icon-signin\"></i> Riwayat login pengguna</b>
                <div id=\"show-last-login-list\"></div>
            </div>
        </div>
    </div>
    ";
        }
        // line 177
        echo "
</div>
<!--/#btn-controls-->
";
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 177,  334 => 167,  325 => 164,  322 => 163,  318 => 162,  308 => 154,  296 => 150,  292 => 148,  288 => 147,  280 => 141,  268 => 137,  264 => 135,  260 => 134,  252 => 128,  244 => 123,  238 => 119,  235 => 118,  232 => 117,  230 => 116,  227 => 115,  214 => 104,  205 => 101,  202 => 100,  198 => 99,  190 => 93,  182 => 88,  176 => 84,  173 => 83,  170 => 82,  168 => 81,  165 => 80,  150 => 68,  146 => 67,  140 => 64,  136 => 63,  130 => 60,  126 => 59,  120 => 56,  116 => 55,  112 => 53,  100 => 44,  89 => 36,  78 => 28,  71 => 23,  68 => 22,  66 => 21,  60 => 17,  54 => 15,  52 => 14,  48 => 13,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
